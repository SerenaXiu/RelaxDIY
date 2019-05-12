<?php
  session_start();

	include "PHP/footer.php";
	include "PHP/navbar.php";

  if (isset($_SESSION["is_auth"]) && $_SESSION["is_auth"] == true) {
  $pdo = new PDO("mysql:host=localhost;dbname=relaxdiy", "root", "");

  if(!empty($_GET["action"])) {
  switch($_GET["action"]) {
  	case "add":
  		if(!empty($_POST["quantity"])) {
        // $msg = $_GET["ID"];
        // echo "<script type='text/javascript'>alert('$msg');</script>";
        $pdo_query_ID = $pdo->prepare("SELECT * FROM courses WHERE ID='" . $_GET["ID"] . "'");
        $pdo_query_ID->execute();
        $pdo_query_ID->setFetchMode(PDO::FETCH_ASSOC);
        $productByCode = $pdo_query_ID->fetch();
  			$itemArray = array($productByCode["ID"]=>array('name'=>$productByCode["name"], 'ID'=>$productByCode["ID"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["price"]));

  			if(!empty($_SESSION["cart_item"])) {
  				if(in_array($productByCode["ID"],array_keys($_SESSION["cart_item"]))) {
  					foreach($_SESSION["cart_item"] as $k => $v) {
  							if($productByCode["ID"] == $k) {
  								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
  									$_SESSION["cart_item"][$k]["quantity"] = 0;
  								}
  								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
  							}
  					}
  				} else {
  					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
  				}
  			} else {
  				$_SESSION["cart_item"] = $itemArray;
  			}
  		}
  	break;
  	case "remove":
  		if(!empty($_SESSION["cart_item"])) {
  			foreach($_SESSION["cart_item"] as $k => $v) {
  					if($_GET["ID"] == $_SESSION["cart_item"][$k]["ID"])
  						unset($_SESSION["cart_item"][$k]);
  					if(empty($_SESSION["cart_item"]))
  						unset($_SESSION["cart_item"]);
  			}
  		}
  	break;
    case "shopnow":
    $pdo_query_shopnow = $pdo->prepare("INSERT INTO booked_courses (customer_id, course_id) VALUES (:customer_id, :course_id)");
      foreach($_SESSION["cart_item"] as $k => $v) {
              $next_course = array("customer_id"=>$_SESSION["user_id"], "course_id"=>$_SESSION["cart_item"][$k]["ID"]);
              $pdo_query_shopnow->execute($next_course);
      }
      unset($_SESSION["cart_item"]);
    break;
  	case "empty":
  		unset($_SESSION["cart_item"]);
  	break;
  }
  }
}
else {
    echo "<script>alert('Please log in first.');
    window.location.href='_index.php';
    </script>";
  exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="CSS/general.css" type="text/css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
<style>
  body {
  	font-family: Arial;
  	color: #211a1a;
  	font-size: 0.9em;
  }

  #shopping-cart {
  	margin: 40px;
  }

  #product-grid {
  	margin: 40px;
  }

  #shopping-cart table {
  	width: 100%;
  	background-color: #F0F0F0;
  }

  #shopping-cart table td {
  	background-color: #FFFFFF;
  }

  .txt-heading {
  	color: #211a1a;
    background-color: #FFFFFF;
  	border-bottom: 1px solid #E0E0E0;
  	overflow: auto;
  }

  #btnEmpty {
  	background-color: #ffffff;
  	border: #d00000 1px solid;
  	padding: 5px 10px;
  	color: #d00000;
  	float: right;
  	text-decoration: none;
  	border-radius: 3px;
  	margin: 10px 0px;
  }

  .btnAddAction {
      padding: 5px 10px;
      margin-left: 5px;
      background-color: #efefef;
      border: #E0E0E0 1px solid;
      color: #211a1a;
      float: right;
      text-decoration: none;
      border-radius: 3px;
      cursor: pointer;
  }

  #product-grid .txt-heading {
  	margin-bottom: 30px;
  }

  .product-item {
  	float: left;
  	background: #ffffff;
  	margin: 30px 30px 0px 0px;
  	border: #E0E0E0 1px solid;
  }

  .product-image {
  	height: 155px;
  	width: 250px;
  	background-color: #FFF;
  }

  .clear-float {
  	clear: both;
  }

  .demo-input-box {
  	border-radius: 2px;
  	border: #CCC 1px solid;
  	padding: 2px 1px;
  }

  .tbl-cart {
  	font-size: 0.9em;
  }

  .tbl-cart th {
  	font-weight: normal;
  }

  .product-title {
  	margin-bottom: 20px;
  }

  .product-price {
  	float:left;
  }

  .cart-action {
  	float: right;
  }

  .product-quantity {
      padding: 5px 10px;
      border-radius: 3px;
      border: #E0E0E0 1px solid;
  }

  .product-tile-footer {
      padding: 15px 15px 0px 15px;
      overflow: auto;
  }

  .cart-item-image {
  	width: 30px;
      height: 30px;
      border-radius: 50%;
      border: #E0E0E0 1px solid;
      padding: 5px;
      vertical-align: middle;
      margin-right: 15px;
  }
  .no-records {
  	text-align: center;
  	clear: both;
  	margin: 38px 0px;
  }
</style>

<body>

	<header>
	</header>
<main class="white-bgrnd">
    <div id="shopping-cart">
    <div class="txt-heading">Shopping Cart</div>

    <a id="btnEmpty" href="_shoppingcart.php?action=empty">Empty Cart</a>
    <?php
    if(isset($_SESSION["cart_item"])){
        $total_quantity = 0;
        $total_price = 0;
    ?>
    <table class="tbl-cart" cellpadding="10" cellspacing="1">
    <tbody>
    <tr>
    <th style="text-align:left;">Name</th>
    <th style="text-align:left;">ID</th>
    <th style="text-align:right;" width="5%">Quantity</th>
    <th style="text-align:right;" width="10%">Unit Price</th>
    <th style="text-align:right;" width="10%">Price</th>
    <th style="text-align:center;" width="5%">Remove</th>
    </tr>
    <?php
        foreach ($_SESSION["cart_item"] as $item){
            $item_price = $item["quantity"]*$item["price"];
    		?>
    				<tr>
    				<td><?php echo $item["name"]; ?></td>
    				<td><?php echo $item["ID"]; ?></td>
    				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
    				<td  style="text-align:right;"><?php echo "€ ".$item["price"]; ?></td>
    				<td  style="text-align:right;"><?php echo "€ ". number_format($item_price,2); ?></td>
            <td style="text-align:center;">
              <form method="post" action="_shoppingcart.php?action=remove&ID=<?php echo $item["ID"]; ?>">
                <input type="submit" value="Remove" class="btnRemoveAction" />
              </form>
            </td>
    				</tr>
    				<?php
    				$total_quantity += $item["quantity"];
    				$total_price += ($item["price"]*$item["quantity"]);
    		}
    		?>

    <tr>
    <td colspan="2" align="right">Total:</td>
    <td align="right"><?php echo $total_quantity; ?></td>
    <td align="right" colspan="2"><strong><?php echo "€ ".number_format($total_price, 2); ?></strong></td>
    <td style="text-align:center;">
      <form method="post" action="_shoppingcart.php?action=shopnow&ID=<?php echo $_SESSION["cart_item"]; ?>">
        <input type="submit" value="Shop now" class="btnAddAction" />
      </form>
    </td>
    </tr>
    </tbody>
    </table>
      <?php
    } else {
    ?>
    <div class="no-records">Your Cart is Empty</div>
    <?php
    }
    ?>
    </div>

    <div id="product-grid">
    	<div class="txt-heading">Our courses</div>
    	<?php
      $pdo_query = $pdo->prepare("SELECT * FROM courses ORDER BY instructor ASC");
      $pdo_query->execute();
      $pdo_query->setFetchMode(PDO::FETCH_ASSOC);
      $product_array = $pdo_query->fetchall();

    	if (!empty($product_array)) {
    		foreach($product_array as $key=>$value){
    	?>
    		<div class="product-item">
    			<form method="post" action="_shoppingcart.php?action=add&ID=<?php echo $product_array[$key]["ID"]; ?>">
    			<div class="product-tile-footer">
    			<div class="product-title">Course: <?php echo $product_array[$key]["name"]; ?></div>
          <div class="product-title">ID: <?php echo $product_array[$key]["ID"]; ?></div>
          <div class="product-title">Instructor: <?php echo $product_array[$key]["instructor"]; ?></div>
    			<div class="product-price">Price: <?php echo "€ ".$product_array[$key]["price"]; ?></div>
    			<div class="cart-action">
                    <input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />
                    <input type="submit" value="Add to Cart" class="btnAddAction" /></div>
    			</div>
    			</form>
    		</div>
    	<?php
    		}
    	}
    	?>
    </div>
</main>
</body>
</html>

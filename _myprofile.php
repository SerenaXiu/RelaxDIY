<?php
  session_start();

	include "PHP/footer.php";
	include "PHP/navbar.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="CSS/general.css" type="text/css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>


<body>

	<header>
	</header>

	<main class="white-bgrnd">
    <div id="booked_courses">
    <div>Your courses</div>

    <?php
    if(isset($_SESSION["is_auth"]) && $_SESSION["is_auth"] == true){
      $pdo = new PDO("mysql:host=localhost;dbname=relaxdiy", "root", "");
      $pdo_query = $pdo->prepare("SELECT courses.name, courses.instructor FROM courses INNER JOIN booked_courses
        ON courses.ID = booked_courses.course_id WHERE booked_courses.customer_id = '" . $_SESSION["user_id"] . "'");
      $pdo_query->execute();
      $pdo_query->setFetchMode(PDO::FETCH_ASSOC);
      $product_array = $pdo_query->fetchAll();
    ?>
    <table class="tbl-cart" cellpadding="10" cellspacing="1">
    <tbody>

    <tr>
      <th style="text-align:left;">Name</th>
      <th style="text-align:left;">Instructor</th>
    </tr>
    <?php
    foreach ($product_array as $item) { ?>
    <tr>
        <td><?php echo $item["name"]; ?></td>
        <td><?php echo $item["instructor"]; ?></td>
    </tr>
  <?php } ?>
    </tbody>
    </table>
  <?php } ?>
</div>
	</main>

</body>
</html>

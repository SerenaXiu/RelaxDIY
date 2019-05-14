<?php
  session_start();

	include "PHP/footer.php";
	include "PHP/navbar.php";
  require_once("_dbcontroller.php");
  $db_handle = new DBController;
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
    <div>Your courses:</div>

    <?php
    if(isset($_SESSION["is_auth"]) && $_SESSION["is_auth"] == true){
      $product_array = $db_handle->runQuery("SELECT courses.name, courses.instructor, courses.url FROM courses INNER JOIN booked_courses
         ON courses.ID = booked_courses.course_id WHERE booked_courses.customer_id = '" . $_SESSION["user_id"] . "'");
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
        <td><a href = "./<?php echo $item["url"];?>"><?php echo $item["name"];?></a></td>
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

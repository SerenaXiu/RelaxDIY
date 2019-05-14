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
	
	<style>
	.header {
  background-color: white;
  padding: 20px;
  text-align: center;
}
	</style>


<body>

	<header>
	</header>

	<main>
			<div id="booked_courses">
			<div class="header" style="box-shadow: 0 6px 15px 0 grey; height:200px; background-color:white;">
  <h1 style="margin-top:70px; color:black">Your courses</h1>
  <p style="color:black"><i class="fa fa-user" aria-hidden="true" style="font-size:70px"></i></p>
  
   </div>


    <?php
    if(isset($_SESSION["is_auth"]) && $_SESSION["is_auth"] == true){
      $product_array = $db_handle->runQuery("SELECT courses.name, courses.instructor, courses.url FROM courses INNER JOIN booked_courses
         ON courses.ID = booked_courses.course_id WHERE booked_courses.customer_id = '" . $_SESSION["user_id"] . "'");
    ?>
    
	<table class="tbl-cart" cellpadding="25" cellspacing="10" style="width:97%; height:400px; margin-left:auto; margin-right:auto; margin-bottom:70px">
	
	
	
    <tbody>

    <tr>
      <th style="text-align:left; font-size:30px;">Name</th>
      <th style="text-align:left; font-size:30px">Instructor</th>
    </tr>
    <?php
    foreach ($product_array as $item) { ?>
    <tr class="white-bgrnd">
        <td><a href = "./<?php echo $item["url"];?>" style="font-size:20px; text-decoration:none; color:black; padding:10px;"><?php echo $item["name"];?></a></td>
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

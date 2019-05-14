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
		<link href="CSS/courses.css" type="text/css" rel="stylesheet">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
	</head>
	
	<style>
	

	.header {
  background-color: white;
  padding: 20px;
  text-align: center;
}

	.column {
  float: left;
  margin-left:45px;
  padding: 10px;
  margin-bottom:70px;
  height:300px;
  width:300px;
}

/* Left and right column */
.column.side {
  width: 27%;
}

/* Middle column */
.column.middle {
  width: 27%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;

}

@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
  
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}


  
	</style>


<body id="generalBackground">

	<div class="header" style="box-shadow: 0 6px 15px 0 grey; height:200px;">
  <h1 style="margin-top:70px">Origami with Anna</h1>
  <p>Keep calm and origami on!</p>
   </div>

	<div class="row center" style="margin-top:30px; margin-bottom:200px;">
	
    <div class="column side">
	<div style="position:absolute;">
	<a href="_team.php" style="margin: auto">
    <img src="Img/_coursepics/anna1.jpeg" class="zoom" style="width:400px; height:400px; margin-left:50px; border-radius:50%; padding:0px;">
	</br>
	<a id="goToidc" class="pos"href="_team.php"><b>&#8702; Trainer</b></a>
	</div>

  </div>
  
  <div class="column middle">  
  <h2 style="text-align: center; margin-left:60px">About</h2>
  <img src="Img/_coursepics/aboutorigami.jpg" class="zoom" style="width:400px; height:400px; margin-left:40px; border-radius:50%; padding:0px;">
	
  </div>
  
 <div class="column side">
 <div style="position:absolute;">
	<a href="_shoppingcart.php" style="margin: auto">
    <img src="Img/_coursepics/origamipic.jpg" class="zoom" style="width:400px; height:400px; margin-left:40px; border-radius:50%; padding:0px;">
	</br>
	<a id="goToidc" class="pos"href="_shoppingcart.php"><b>&#8702; Join!</b></a>
	</div>

  </div>
</div>




</body>
</html>
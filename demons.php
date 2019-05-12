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
	
	<style>
	
	body {
		
		background-color:black;
	}
	

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


<body>

	<div class="header" style="box-shadow: 0 6px 15px 0 grey; height:200px; background-color:black;">
  <h1 style="margin-top:70px; color:grey">Exorcisms and demon summoning</h1>
  <p style="color:grey">with Thomas...</p>
   </div>

	<div class="row center" style="margin-top:30px; margin-bottom:200px;">
	
    <div class="column side">
    <img src="Img/Coursespics/thomas2.jpeg" style="width:400px; height:400px; margin-left:40px; border-radius:50%">
	<h2 style="text-align: center; margin-left:60px"><a href="_team.php">Trainer</a></h2>

  </div>
  
  <div class="column middle">  
	<h2 style="text-align: center; margin-left:60px">About</h2>
  <img src="Img/Coursespics/aboutdemons111.jpg" style="width:400px; height:400px; margin-left:40px; border-radius:50%">

  </div>
  
 <div class="column side">
    <img src="Img/Coursespics/demonpic.jpg" style="width:400px; height:400px; margin-left:40px; border-radius:50%">
	<h2 style="text-align: center; margin-left:60px"><a href="_courses.php">Join!</a></h2>

  </div>
</div>



		<footer class="footer">
			<strong>	&quot;<script src="http://numbersapi.com/random?write"></script>	&quot;</strong>
			<br>
			Copyright &copy; 2019 <a href="impressum.html">relaxDIY.com</a>
		</footer>	
</body>
</html>
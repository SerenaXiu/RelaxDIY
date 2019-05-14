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
  <h1 style="margin-top:20px">Prices</h1>
  <i class="fa fa-shopping-bag" aria-hidden="true" style="font-size:50px;"></i>
  </br>
   </br>
    </br>
  <p>We offer different ways to get access to our courses to make sure that everybody finds one pricing model he/she is happy with.</p>
   </div>

	<div class="row center" style="margin-top:30px; margin-bottom:200px;">
	
    <div class="column side">
	<div style="position:absolute">
    <img src="Img/_coursepics/option111.jpg" style="width:400px; height:400px; margin-left:40px; border-radius:50%">
	<h2 style="text-align: center; margin-left:60px">Single Class</h2>
	<div class="white-bgrnd" style="margin-bottom:70px; margin-left:70px; width:220px; height:150px;">
	You pay a fixed price for one specific course - price depends on the course. 
	</br>
		<b>Single class:</b>  </br> &euro; 6.99 </br>
		</br>
		</br>
		
		<a id="goToid" class="goTo "href="_shoppingcart.php"><b>&#8702; Shop now</b></a>
	</div>
	</div>

  </div>
  
  <div class="column middle">  
 <div style="position:absolute">
  <img src="Img/_coursepics/option2.jpg" style="width:400px; height:400px; margin-left:40px; border-radius:50%">
	 <h2 style="text-align: center; margin-left:60px">Basic Package</h2>
	 <div class="white-bgrnd" style="margin-bottom:70px; margin-left:70px; width:220px; height:150px;">
	The basic package includes 10 single courses of your choice. 
	</br><b>Basic package:</b>  </br> &euro; 34.99
	</br>
		</br>
		</br>
		</br>
		<a id="goToid" class="goTo "href="_shoppingcart.php"><b>&#8702; Shop now</b></a>
	</div>
	</div>
  </div>
  
 <div class="column side">
 <div style="position:absolute">
    <img src="Img/_coursepics/option3.jpg" style="width:400px; height:400px; margin-left:40px; border-radius:50%">
	<h2 style="text-align: center; margin-left:60px">All Inclusive</h2>
	<div class="white-bgrnd" style="margin-bottom:70px; margin-left:70px; width:220px; height:150px;">
	You pay a <b> monthly fee </b> or a <b> yearly fee </b> and get access to everything. 
		</br>

		<b>Monthly membership:</b> </br>&euro; 59.99
		</br>
		<b>Yearly membership:</b>  </br> &euro; 389.99 
		</br>
		</br>
		
		<a id="goToid" class="goTo "href="_shoppingcart.php"><b>&#8702; Shop now</b></a>
	</div>
	</div>

  </div>
</div>



		<footer class="footer">
			<strong>	&quot;<script src="http://numbersapi.com/random?write"></script>	&quot;</strong>
			<br>
			Copyright &copy; 2019 <a href="impressum.html">relaxDIY.com</a>
		</footer>	
</body>
</html>
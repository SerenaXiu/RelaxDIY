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
		
		
		<style>
			img {
				max-width:75%;
				height: auto;
			}
		</style>
	</head>


<body id="generalBackground">

	<header >
	</header>

	<main id="aboutText" class="white-bgrnd" style="margin-bottom:70px;">  

							<a class="not-active" href="http://localhost:8081/RelaxDIY/_index.php" >   
							<h4> About RelaxDIY </h4>
							<img src="Img/_coursepics/about.jpg" style=" max-width:80%; width:700px; height:250px margin-left:auto; margin-right:auto; border-radius:40px;box-shadow: 0 6px 15px 0 grey;">
							<p> Are you feeling stressed and exhausted? <br />
								Are you having trouble concentrating throughout your day? <br />
								Are you in desperate need of a break from the daily grind? <br />
								</br>
								With RelaxDIY you found the right spot to get exactly that!
							</p>
							<p>
								<b>RelaxDIY is pursuing the goal to decelerate your life. </b> <br />
								We want to make sure to help you get your focus <br />
								&#45; <i> at least for a little while &#45; </i> </br>
								back to yourself. <br />
								</br>
								
							<img src="Img/_coursepics/about1.jpg" style="max-width:35%; width:300px; height:300px; margin-left:auto; margin-right:auto; border-radius:40px;box-shadow: 0 6px 15px 0 grey;">
							</br>
							</br> <b>
									Scroll through our one&#45;of&#45;a&#45;kind</br> 
									course offers and find the one that </br>
									will help you to relax. </b>
							</p>
							</br>
							
							<a id="goToid" class="goTo "href="_courses.php"><b>&#8702; Go to Courses</b></a>
							
						</a>
	</main>


	
</body>
</html>
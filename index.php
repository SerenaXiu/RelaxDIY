<?php
  session_start();
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

/*used by login popup window for username and password input fields*/
input[type=text], select, textarea, [type=password]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

.slideshow-container .btn {
  position: absolute;
  top: 74%;
  left: 65%;
  transform: translate(-60%, -60%);
  -ms-transform: translate(-60%, -60%);
  background-color: #fff;
  opacity: 0.9;
  color: grey;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 20px;
  text-align: center;
  box-shadow: 0 6px 25px 0 black;

}

.slideshow-container .btn:hover {
  opacity:0.7;
  filter: alpha(opacity=70);

}

.container .btn:hover {
  background-color: black;
}

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1s;
  animation-name: fade;
  animation-duration: 1s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
 .mySlides {
	display: none
	}

.fakeimg {
  background-color: white;
  width: 100%;
}

img {
    width: 100%;
	height:530px;
	border-radius:15px;
	box-shadow: 0 6px 25px 0 black;
}

.zoom {
 padding:10px;
  background-color: transparent;
  transition: transform .2s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.01); /* IE 9 */
  -webkit-transform: scale(1.01); /* Safari 3-8 */
  transform: scale(1.01); 
}


 .footer {
    position:fixed;bottom:0;
	background-color: #fff;
    display:block;
	padding: 6px 8px;
	box-shadow: 0 3px 20px 0 black;
	width: 100%;
	text-align:center;
}


.center {

  text-align: center;
  width: 100%;
  border: none;

}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}



/* scroll button */

.ct-btn-scroll {
  width: 49px;
  height: 10px;
  position: absolute;
  bottom: 10px;
  left: 0;
  right: 0;
  margin: auto;
  padding-top: 300px;
  z-index: 9;
  border-radius: 50%;
  -webkit-transition: background-color 0.25s ease-in-out;
  transition: background-color 0.25s ease-in-out;
}



</style>

<body>

	<header>
			<nav class="navbar">

				<div id="mySidenav" class="sidenav">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					  <a href="myprofile.html" style="border-bottom:solid; border-width: thin;">My profile</a>
					  <a href="about.html">About</a>
					  <a href="courses.html">Courses</a>
					  <a href="partners.html">Partners</a>
					  <a href="contact.html">Contact</a>
					  <a href="prices.html">Prices</a>
					  <a href="impressum.html">Impressum</a>
				</div>

				<span style="font-size:24px;cursor:pointer; float:left; margin-left:10px" onclick="openNav()">&#9776; </span>

						<script>
						function openNav() {
						  document.getElementById("mySidenav").style.width = "250px";
						}
						function closeNav() {
						  document.getElementById("mySidenav").style.width = "0";
						}
						</script>

				<a href="index.php"><i class="fa fa-fw fa-home"></i> HOME</a>
				<div class="dropdown">
					<button class="dropbtn"><i class="fa fa-camera-retro"></i> COURSES <i class="fa fa-caret-down"></i></button>
					<div class="dropdown-content">
					  <a href="origami.html">Origami</a>
					  <a href="https://www.zumba.com" target= "blank">Zumba</a>
					  <a href="photography.html"target= "blank">Photography</a>
					  <a href="cooking.html"target= "blank">Cooking</a>
					  <a href="daemons.html"target= "blank">Daemons</a>
					  <a href="writing.html"target= "blank">Writing</a>
					</div>
				</div>

                <a href="blog.html"><i class="fa fa-book" aria-hidden="true"></i> BLOG</a>

				<div class="dropdown">
					<button class="dropbtn"><i class="fa fa-users"></i> TEAM <i class="fa fa-caret-down"></i></button>
						<div class="dropdown-content">

						  <a href="anna.html">Anna</a>
						  <a href="elisabeth.html">Elisabeth</a>
						  <a href="gaelle.html">Gaelle</a>
						  <a href="judyta.html">Judyta</a>
						  <a href="serena.html">Serena</a>
						  <a href="thomas.html">Thomas</a>

						</div>

				</div>

<!--                toggle logout / login button-->
                <?php if (isset($_SESSION['is_auth']) && $_SESSION['is_auth'] == true): ?>
                    <form action="logout.inc.php" method="post">
                    <button style="width:auto; margin-right:10px; padding:3px; background-color:white; font-family: Bell MT; color:black;
				    font-size:15px; letter-spacing:3px" id="logout_btn">
                    <i class="fa fa-fw fa-user"></i> LOGOUT </button>
                    </form>
                <?php else:?>
                    <button onclick="document.getElementById('id01').style.display='block'"
                    style="width:auto; margin-right:10px; padding:3px; background-color:white; font-family: Bell MT; color:black;
				    font-size:15px; letter-spacing:3px" id="login_btn">
                    <i class="fa fa-fw fa-user"></i> LOGIN </button>
                <?php endif; ?>


					<div id="id01" class="modal">

					  <form class="modal-content animate" method="post">

						<div class="imgcontainer">
						  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
						</div>

            <div class="container">
                            <label for="username"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="username" required>

                            <label for="password"><b>Password</b></label><br>
                            <input type="password" placeholder="Enter Password" name="password" required>

                            <button type="submit" formaction="login.inc.php" name="login_submit" id="login_submit">Login</button>
                            <button type="submit" formaction="register.inc.php" name="reg_submit" id="reg_submit">Register</button>
                            <label><span><a href="#">Forgot password?</a></span></label>
						</div>
					  </form>

					</div>

					<script>
					// Get the modal
					var modal = document.getElementById('id01');
					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
						if (event.target == modal) {
							modal.style.display = "none";
						}
					}
					</script>

			<a href="shoppingcart.html"style="float:right"><i class="fa fa-shopping-cart"></i> SHOPPING CART</a>

			<div class="dropdown" style="float:right">
				<button class="dropbtn"><i class="fa fa-search"></i></button>
					<div class="dropdown-content" style="margin-top:33px; background-color:transparent;
					box-shadow:none; border:none;">
						<form method="get" action="http://google.com/search">
							<input type="text" placeholder="Search..." name="q"
							style="width:220px; height:40px; letter-spacing:2px; padding: 12px 13px; border-radius:0px;">
						</form>
					</div>
			</div>

<!--            if user is logged in, write Welcome, else echo error message    -->
<div style="font-family: Bell MT; color:black; font-size:17px; letter-spacing:3px; margin-top: 10px; text-align: center">
    <?php
    if (isset($_SESSION['username']) && $_SESSION['username'] !== '') {
        echo "Welcome back, ".$_SESSION['username'];
    }
    else if (isset($_SESSION['error']) && $_SESSION['error'] !== '') {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    else if (isset($_SESSION['reg_failed']) && $_SESSION['reg_failed'] !== '') {
        echo $_SESSION['reg_failed'];
        unset($_SESSION['reg_failed']);
    }
    else if (isset($_SESSION['reg_check']) && $_SESSION['reg_check'] !== '') {
        echo $_SESSION['reg_check'];
        unset($_SESSION['reg_check']);
    }
    else if (isset($_SESSION['message']) && $_SESSION['message'] !== '') {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
</div>
			</nav>

	</header>

	<main>



	<div class="slideshow-container">

<div class="mySlides fade col-md-12">
  <img src="Img/Slidegallery/slide1.jpg" style="width:100%; border-radius:0px;">
  <section class="company-heading intro-type" id="parallax-one">
        <a class="ct-btn-scroll ct-js-btn-scroll" href="#section2"><img alt="Arrow Down Icon" style="height: 60px; width:60px;
					margin-top:-80px; margin-right: 30px; position:absolute; border-radius: 30px; "src="https://www.solodev.com/assets/anchor/arrow-down.png"></a>
      </div>
	  <div class="parallax" id="parallax-cta" style="background-image:url(https://www.solodev.com/assets/anchor/company-hero2.jpg);"></div>
</section>

</div>

<div class="mySlides fade">
  <img src="Img/Slidegallery/slied2.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <img src="Img/Slidegallery/slidee3.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <img src="Img/Slidegallery/slide4.jpg" style="width:100%">

</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

<div class="main">
		<script>
		<?php

		$api_url = 'https://api.darksky.net/forecast/9d2e1fd7e2c4011fce1daa9fc49bd46c/48.209,16.37?exclude=minutely,hourly,daily,alerts,flags&units=ca';


		$data = file_get_contents($api_url);
		$clean_data = json_decode($data,TRUE);
		echo $clean_data['currently']['temperature'];
		//echo '<script>alert($data);</script>';
		$temperature = $clean_data['currently']['temperature'];
		$weather = $clean_data['currently']['icon'];

		switch ($weather){
			case 'clear-day':
				if ($temperature > 18) {
					echo '<p>Its a beautiful Day how about some <a href="https://www.zumba.com" target= "blank">Zumba?</a></p>';
				}elseif ($temperature > 0){
					echo '<p>Its sunny but rather cold why dont you <a href="writing.html"target= "blank">Write something?</a></p>';
				}else{
					echo '<p>Its very cold why dont you <a href="cooking.html"target= "blank">cook something warm?</a></p>';
				}
				break;

			case 'clear-night':
				echo '<p>Its a clear night perfect time to <a href="daemons.html"target= "blank">Summon some Demons!</a></p>';
				break;

			case 'rain':
				echo '<p>Ah a rainy day you could try some <a href="origami.html">Origami.</a>></p>';
				break;

			case 'snow':
				echo '<p>Ah a snowy day you could try some <a href="origami.html">Origami</a>> or <a href="writing.html" target= "blank">Write something.</a></p>';
				break;

			case 'sleet':
				if ($temperature > 18) {
					echo '<p>Test Case 1 <a href="https://www.zumba.com" target= "blank">Zumba?</a></p>';
				}elseif ($temperature > 0){
					echo '<p>Test Case 2 <a href="https://www.zumba.com" target= "blank">Zumba?</a></p>';
				}else{
					echo '<p>Test Case 3 <a href="https://www.zumba.com" target= "blank">Zumba?</a></p>';
				}
				break;

			case 'wind':
				if ($temperature > 18) {
					echo '<p>Test Case 4 <a href="https://www.zumba.com" target= "blank">Zumba?</a></p>';
				}elseif ($temperature > 0){
					echo '<p>Test Case 5 <a href="https://www.zumba.com" target= "blank">Zumba?</a></p>';
				}else{
					echo '<p>Test Case 6 <a href="https://www.zumba.com" target= "blank">Zumba?</a></p>';
				}
				break;

			case 'fog':
				echo '<p>Foggy weather is perfect to <a href="daemons.html"target= "blank">Summon some Demons!</a></p>';
				break;

			case 'cloudy':
				echo '<p>Test Case 7 <a href="https://www.zumba.com" target= "blank">Zumba?</a></p>';
				break;

			case 'partly-cloudy-day':
				echo '<p>Test Case 8 <a href="https://www.zumba.com" target= "blank">Zumba?</a></p>';
				break;

			case 'partly-cloudy-night':
				echo '<p>Test Case 9 <a href="https://www.zumba.com" target= "blank">Zumba?</a></p>';
				break;

		}
		?>
		
		</script>
		<section id="section2">

			<div class="white-bgrnd" style="padding:5px; width:93%; margin-left:auto; margin-right:auto;">
			<h2 style="margin-left:50px">  </h2>
			</div>
	
	
		<div class="center">
		<a href="https://www.w3schools.com">
		<img class="zoom" border="0" alt="Zumba" src="Img/Judyta/sliden11111.jpg" style="width:45%; height:300px; margin-left:20px;">
		
		
		<a href="https://www.w3schools.com">
		<img class ="zoom" border="0" alt="Zumba" src="Img/Judyta/sliden2010.jpg" style="width:45%; height:300px; margin-left:20px;">
		</center>
        </br>
		</br>

		<div class="center">
		<a href="https://www.w3schools.com">
		<img class="zoom" border="0" alt="Zumba" src="Img/Judyta/sliden3.jpg" style="width: 21%; height:300px; margin-left:none;">
		<a href="https://www.w3schools.com">
		<img class="zoom" border="0" alt="Zumba" src="Img/Judyta/sliden4.jpg" style="width: 21%; height:300px; margin-left:15px;">
		<a href="https://www.w3schools.com">
		<img class="zoom" border="0" alt="Zumba" src="Img/Judyta/sliden99.jpg" style="width: 21%; height:300px; margin-left:20px;">
		<a href="https://www.w3schools.com">
		<img class="zoom" border="0" alt="Zumba" src="Img/Judyta/sliden77.jpg" style="width: 21%; height:300px; margin-left:20px; margin-right:-10px;">
		</div>


		</section>
		<script>
	  $(document).ready(function(){
	  $("a").on('click', function(event) {
		if (this.hash !== "") {
		  event.preventDefault();
		  var hash = this.hash;
		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  }, 800, function(){
			window.location.hash = hash;
		  });
		}
	  });
	});
	</script>
	<div class="white-bgrnd" style="margin-bottom:50px; margin-left:auto; margin-right:auto; width:87%;">

	/*about */

	</div>
</div>

	</main>



		<footer class="footer">
               Copyright © 2019 <a href="index.php">relaxDIY.com</a>
		</footer>
</body>
</html>

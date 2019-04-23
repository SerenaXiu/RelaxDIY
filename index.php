<?php
  session_start();
  include ('validate.inc.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
<style>
 box-sizing: {
	
	border-box;
 }
 body {
 width:100%;
 height: 100%;
 background-image: url("unbenannt.jpg");
 font-family: Bell MT, Helvetica;
 letter-spacing: 3px;
 margin:0;	
 }
 
.navbar {
  overflow: hidden;
  background-color: #FEFFFA;
  box-shadow: 0 3px 20px 0 black;
  width: 100%;
}
.navbar a {
  float: left;
  font-size: 15px;
  color: black;
  text-align: center;
  padding: 10px 12px;
  text-decoration: none;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #F0F0EF;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0px;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 30px;
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover {
  color: #f1f1f1;
  width:100%;
}
.sidenav .closebtn {
  position: absolute;
  top: -5px;
  right: 0px;
  font-size: 30px;
  left: 180px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 15px;}
}
.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 15px;  
  letter-spacing: 3px;
  border: none;
  outline: none;
  color: black;
  padding: 10px 12px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 130px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-top:37px;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-color: #ddd;
}
.dropdown:hover .dropdown-content {
  display: block;
}
button {
  background-color: grey;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  float:right;
}
button:hover {
  opacity: 0.8;
}
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 110%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
  padding-top: 60px;
}
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 30%;
  height:40%;
  border-radius:10px;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}
.container {
  padding: 16px;
  margin-top:0px; 
  background-color: white;
  border:none;
}

 .container-slide {
  position: relative;
  width: 100%;
  max-width: 400px;  
 }
 
 input[type=text1], input[type=password1] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.close {
  position: absolute;
  right: 25px;
  top: -10px;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
.modal-content animate{
     background-color: #fefefe;
     margin: 5% auto 15% auto;
     border: 1px solid #888;
     width: 30%;
     height:40%;
     border-radius:10px;
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
 }
@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
.fakeimg {
  background-color: white;
  width: 100%;
}
img {
    width: 100%;
	height:100%;
	
	box-shadow: 0 6px 25px 0 black;
}
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
	
	box-shadow: 0 6px 25px 0 black;
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
						
				<a href="homepage.html"><i class="fa fa-fw fa-home"></i> HOME</a>
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
                        <form action="validate.inc.php" method="post">
						  <label for="username"><b>Username</b></label>
						  <input type="text" placeholder="Enter Username" name="username" required>

						  <label for="password"><b>Password</b></label><br>
						  <input type="password" placeholder="Enter Password" name="password" required>
							
						  <button type="submit" name="login_submit" id="login_submit">Login</button>

						  <label><span><a href="#">Forgot password?</a></span></label>
						  <label><span><a href="#" style="float:right"> Create a new account</a></span></label>

                        </form>

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
                if (isset($_SESSION['username'])) {
                    echo "Welcome back, ".$_SESSION['username'];
                }
                else if (isset($error)) {
                    echo $error;
                }
                ?>
            </div>
			</nav>

	</header>

	<main>
	
	
	<div class="slideshow-container">

<div class="mySlides fade">
  <img src="slide1.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <img src="zumbaslide.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <img src="cali.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <img src="spices.jpg" style="width:100%">

</div>


<br>

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

	</main>
	
	

		<footer class="footer">
            <strong><script src="http://numbersapi.com/random?write"></script></strong>
            <br>
            Copyright &copy; 2019 <a href="impressum.html">relaxDIY.com</a>
		</footer>	
</body>
</html>
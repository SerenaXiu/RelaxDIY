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

/* for Cotact-Form */
.container-contact { 
  border-radius: 5px;
  background-color: #fff;
  padding: 20px;
  width: 70%;
 margin-right: auto;
 margin-left: auto;
 box-shadow: 0 3px 10px 0 black;
 margin-top: 45px;
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
				
				  <a class="active" href="blog.html"><i class="fa fa-book" aria-hidden="true"></i> BLOG</a>
				
				<div class="dropdown">
					<button class="dropbtn"><i class="fa fa-users"></i></i> TEAM <i class="fa fa-caret-down"></i></button>
						<div class="dropdown-content">
						
						  <a href="anna.html">Anna</a>
						  <a href="elisabeth.html">Elisabeth</a>
						  <a href="gaelle.html">Gaelle</a>
						  <a href="judyta.html">Judyta</a>
						  <a href="serena.html">Serena</a>
						  <a href="thomas.html">Thomas</a>
						  
						</div>
						
				</div>
				
				<button onclick="document.getElementById('id01').style.display='block'" 
				style="width:auto; margin-right:10px; padding:3px; background-color:white; font-family: Bell MT; color:black; font-size:15px; letter-spacing:3px">
				<i class="fa fa-fw fa-user"></i>  LOGIN </button>
							
					<div id="id01" class="modal">
					
					  <form class="modal-content animate" action="/action_page.php">
					  
						<div class="imgcontainer">
						  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
						</div>
						
						<div class="container">
						
						  <label for="uname"><b>Username</b></label>
						  <input type="text1" placeholder="Enter Username" name="uname" required>

						  <label for="psw"><b>Password</b></label>
						  <input type="password1" placeholder="Enter Password" name="psw" required>
							
						  <button type="submit">Login</button>
						  
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
	
			</nav>

	</header>

	<main>
	
	<!-- Contact Form -->
	<div class="container-contact">
		<form action="contactform_insert.php" method="post" name="contactform" enctype="text/plain">
			<label for="fname">First Name</label>
			<input type="text" id="fname" name="fname" required placeholder="Your name..">

			<label for="lname">Last Name</label>
			<input type="text" id="lname" name="lname" required placeholder="Your last name..">
			
			<label for="email">Email Address</label>
			<input type="text" id="email" name="email" required placeholder="Your email address.." maxlength="80">

			<label for="country">Country</label>
				<select id="country" name="country" required>
				  <option value="austria">Austria</option>
				  <option value="iceland">Iceland</option>
				  <option value="norway">Norway</option>
				  <option value="poland">Poland</option>
				  <option value="portugal">Portugal</option>
				  <option value="scottland">Scottland</option>
				  <option value="sweden">Sweden</option>
				  <option value="uk">United Kingdom</option>
				</select>

			<label for="message">Message</label>
			<textarea id="message" name="message" placeholder="Let us know how we can be of assistance.." style="height:150px" required></textarea>

			<input type="submit" value="Submit" name="msg_submit" id="msg_submit">
		</form>
	</div>

	</main>

	<footer class="footer">
		<strong><script src="http://numbersapi.com/random?write"></script></strong>
		<br>
		Copyright &copy; 2019 <a href="impressum.html">relaxDIY.com</a>
	</footer>
		
</body>
</html>
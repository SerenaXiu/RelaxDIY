<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="CSS/general.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>

#content-desktop{display:block;}
#content-mobile{display:none;}

@media screen and (max-width:900px)
	{
	#content-desktop{display:none;}
	#content-mobile{display:block;}	
	}
	
</style>

</head>


<body>
		<nav class="navbar">

            <!-- if logged in myProfile is shown - if logged out it is not shown -->
            <?php if (isset($_SESSION['username']) && $_SESSION['username'] !== '') { ?>
						<div id="mySidenav" class="sidenav" >
							  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
							  <a href="_myprofile.php" style="border-bottom:solid; border-width: thin;">My profile</a>
							  <a href="_about.php">About</a>
							  <a href="_courses.php">Courses</a>
							  <a href="_partners.php">Partners</a>
							  <a href="_contact.php">Contact</a>
							  <a href="_prices.php">Prices</a>
							  <a href="_impressum.php">Impressum</a>
						</div>

            <?php } else { ?>

                        <div id="mySidenav" class="sidenav" >
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="_about.php">About</a>
                            <a href="_courses.php">Courses</a>
                            <a href="_partners.php">Partners</a>
                            <a href="_contact.php">Contact</a>
                            <a href="_prices.php">Prices</a>
                            <a href="_impressum.php">Impressum</a>
                        </div>

            <?php } ?>

						<span id="sidenavbtn" style="font-size:24px;cursor:pointer; float:left; margin-left:10px" onclick="openNav()">&#9776; </span>

								<script>
								function openNav() {
								  document.getElementById("mySidenav").style.width = "250px";
								}
								function closeNav() {
								  document.getElementById("mySidenav").style.width = "0";
								}
								</script>

	<div id="content-desktop">
						<a href="_index.php"><i class="fa fa-fw fa-home"></i> HOME</a>
						
						<style=" padding:0">
							<div class="dropdown">
								<button class="dropbtn"><i class="fa fa-camera-retro"></i> COURSES <i class="fa fa-caret-down"></i></button>
									<div class="dropdown-content">
									
									  <a href="_courses.php">ALL</a>
									  <a href="origami.php">Origami</a>
									  <a href="_zumba.php" target= "blank">Zumba</a>
									  <a href="photography.php"target= "blank">Photography</a>
									  <a href="cooking.php"target= "blank">Cooking</a>
									  <a href="demons.php"target= "blank">Demons</a>
									  <a href="writing.php"target= "blank">Writing</a>
									</div>
							</div>
						</a>
						
						<a href="blog.html"><i class="fa fa-book" aria-hidden="true"></i> BLOG</a>
						
						<style="padding:0">
						<div class="dropdown">
							 <button class="dropbtn"><i class="fa fa-users"></i> TEAM <i class="fa fa-caret-down"></i></button>
								<div class="dropdown-content">

								  <a name="anna" href="_team-php" target="_self" >Who are we?</a>
								  <a href="partners.php">Our partners</a>

								</div>

						</div>
						</a>


			
				<div id="search">
					<div class="dropdown" style="float:right">
						<button class="dropbtn"><i class="fa fa-search"></i></button>
							<div class="dropdown-content" style="position:absolute; right:0px; margin-top:33px; background-color:transparent;
							box-shadow:none; border:none;">
								<form method="get" action="http://google.com/search">
									<input type="text" placeholder="Search..." name="q"
									style="width:220px; height:40px; letter-spacing:2px; padding: 12px 13px; border-radius:0px;">
								</form>
							</div>
					</div>
				</div>
				
				<div id="shoppingcart">
					<a href="_shoppingcart.php"style="float:right"><i class="fa fa-shopping-cart"></i>SHOPPING CART</a>
					
				</div>

		
		
	</div>
		

	
	<div id="content-mobile">							
						<a href="_index.php"><i class="fa fa-fw fa-home"></i></a>
						
						<a href="_courses.php" style=" padding:0px; margin:0px" >
							<div class="dropdown">
								<button class="dropbtn"><i class="fa fa-camera-retro"></i><i class="fa fa-caret-down"></i></button>
									<div class="dropdown-content">
									  <a href="courses/origami.php">Origami</a>
									  <a href="https://www.zumba.com" target= "blank">Zumba</a>
									  <a href="courses/photography.php"target= "blank">Photography</a>
									  <a href="courses/cooking.php"target= "blank">Cooking</a>
									  <a href="couses/demons.php"target= "blank">Demons</a>
									  <a href="courses/writing.php"target= "blank">Writing</a>
									</div>
							</div>
						</a>
						
						<a href="blog.html"><i class="fa fa-book" aria-hidden="true"></i></a>
						
						<a href="_team.php" style=" padding:0">
						<div class="dropdown">
							 <button class="dropbtn"><i class="fa fa-users"></i><i class="fa fa-caret-down"></i></button>
								<div class="dropdown-content">

								  <a class="lead" href="../RelaxDIY/_team.php#anna">Anna</a>
								  <a href="elisabeth.html">Elisabeth</a>
								  <a href="gaelle.html">Gaelle</a>
								  <a href="judyta.html">Judyta</a>
								  <a href="serena.html">Serena</a>
								  <a href="thomas.html">Thomas</a>

								</div>

						</div>
						</a>

				<div id="search">
					<div class="dropdown" style="float:right">
						<button class="dropbtn"><i class="fa fa-search"></i></button>
							<div class="dropdown-content" style="position:absolute; right:0px; margin-top:33px; background-color:transparent;
							box-shadow:none; border:none;">
								<form method="get" action="http://google.com/search">
									<input type="text" placeholder="Search..." name="q"
									style="width:220px; height:40px; letter-spacing:2px; padding: 12px 13px; border-radius:0px;">
								</form>
							</div>
					</div>
				</div>
				
				<div id="shoppingcart">
					<a href="_shoppingcart.php"style="float:right"><i class="fa fa-shopping-cart"></i></a>
					
				</div>
	</div>
	
	
				<!--                toggle logout / login button-->
					<div style="float:right">
						<?php if (isset($_SESSION['is_auth']) && $_SESSION['is_auth'] == true): ?>
							<form action="logout.inc.php" method="post">
							<button style="width:auto; margin-right:10px; padding:3px; background-color:white; font-family: Bell MT; color:black;
							font-size:15px; letter-spacing:3px" id="logout_btn">
							<i class="fa fa-fw fa-user" ></i> LOGOUT </button>
							</form>
						<?php else:?>
							<button onclick="document.getElementById('id01').style.display='block'"
							style="float:right; width:auto; margin-right:10px; padding:3px; background-color:white; font-family: Bell MT; color:black;
							font-size:15px; letter-spacing:3px" id="login_btn">
							<i class="fa fa-fw fa-user" ></i> LOGIN </button>
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
	
</body>
</HTML>
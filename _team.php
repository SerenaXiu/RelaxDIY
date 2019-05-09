<?php
  session_start();

 	include "PHP/footer.php";
	include "PHP/navbar.php";
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		
		<link href="../CSS/team.css" type="text/css" rel="stylesheet">
		<link href="../CSS/general.css" type="text/css" rel="stylesheet">
		
		<script src="myScript.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
	</head>


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


	
	<main class="white-bgrnd">
		<p><h1> Meet our team! </h1>
		Our team consists of a happy bunch of people with different talents. 
		Each of us will provide you with unique course offers that will astound you. 
		From building an origami castle to dancing your name in "Zumba", 
		from exotic cooking classes to learning how to write neater than a computer, 
		from preserving your most amazing memories by taking amazingly beautiful photographs to 
		catching the demons in your life you always wanted to get rid of&hellip; 
		there is something incredible for everyone 😊. 	
		<p/>
		
	<div class="people">
		
		
		<table border="1">
		<tr>
			<td colspan="2"><h2>Anna Kastlunger</h2></td></tr>
		
		<tr>
			<td colspan="1" rowspan="2">
				<span id="placeholderImg">
					<span id="person"> <img class="cImg" src="../Img/Profilepics/Anna.jpeg" alt="Photo of Anna Kastelungen with Crane"> </span>
					<span id="onhover"> <img class="cImg" src="../Img/Profilepics/Anna2.jpeg" alt = "Photo of Anna Kastelungen with Crane"> </span>
				</span>
			</td>
			
			<td colspan="4">
				<p class="text"> 
				Anna's love for origami goes back to her childhood. 
				After having made her first paper creation at the age of five, 
				she has never stopped folding since. Anna has even published her own 
				book in which she teaches you to fold origami patterns that she created herself. 
				Very impressing, right?! If this has convinced you to try out 
				one of Anna’s many courses, you will be in the best hands.<p/>
			</td>
		
		</tr>
		
		<tr>
			<td> <p class="data"> Course: <a href="course-Origami.html"> Origami </a> <br> Email: beispiel@email.com</p></td>
		</table>
		<br><br><br>
		
		
		<table border="1">
		<tr>
			<td colspan="2"><h2>Elisabeth Kohlhofer</h2></td></tr>
		
		<tr>
			<td colspan="1" rowspan="2">
				<span id="placeholderImg">
					<span id="person"> <img class="cImg" src="../Img/Profilepics/Elisabeth.jpeg" alt="Photo of Elisabeth Kohlhofer"> </span>
					<span id="onhover"> <img class="cImg" src="../Img/Profilepics/Elisabeth2.jpeg" alt = "Photo of Calligraphy"> </span>
				</span>
			</td>
			
			<td colspan="4">
				<p class="text"> 
				While Elisabeth loves all things creative, calligraphy is definitely 
			her favourite. She started colouring mandalas at a young age and when grown-up, 
			turned her passion into a job by mostly writing all kinds of event invitations 
			for big business to give them a special touch. Elisabeth hopes to fuel your 
			enthusiasm for the art of hand-lettering as well. Her lessons are easy to 
			follow and there's no need for special equipment! Just give it a try.<p/>
			</td>
		
		</tr>
		
		<tr>
			<td> <p class="data"> Course: <a href="course-Calligraphy.html"> Calligraphy </a> <br> Email: beispiel@email.com</p></td>
		</table>
		<br><br><br>
		
		
		<table border="1">
		<tr>
			<td colspan="2"><h2>Gaelle Knibbeler</h2></td></tr>
		
		<tr>
			<td colspan="1" rowspan="2">
				<span id="placeholderImg">
					<span id="person"> <img class="cImg" src="../Img/Profilepics/Gaelle.jpeg" alt="Photo of Gaelle Knibbeler"> </span>
					<span id="onhover"> <img class="cImg" src="../Img/Profilepics/Gaelle2.jpeg" alt = "Photo of Breakfast"> </span>
				</span>
			</td>
			
			<td colspan="4">
				<p class="text"> 
				For Gaelle cooking is like therapy. If it's her version of a peanut butter
			sandwich or an apple strudel par excellence – nothing is impossible. You think you 
			are a cooking sourpuss and nothing will ever change that? Well just wait and see what 
			Gaelle’s course can offer you. <p/>
			</td>
		</tr>
		
		<tr>
			<td> <p class="data"> Course: <a href="course-Cooking.html"> Cooking </a> <br> Email: beispiel@email.com</p></td>
		</table>
		<br><br><br>
			
		<table border="1">
		<tr>
			<td colspan="2"><h2>Judyta Krzyzak</h2></td></tr>
		
		<tr>
			<td colspan="1" rowspan="2">
				<span id="placeholderImg">
					<span id="person"> <img class="cImg" src="../Img/Profilepics/Judyta.jpeg" alt="Photo of Judyta Krzyzak"> </span>
					<span id="onhover"> <img class="cImg" src="../Img/Profilepics/Judyta2.jpeg" alt = "Photo of a dancing Judyta"> </span>
				</span>
			</td>
			
			<td colspan="4">
				<p class="text"> 
				Judyta our Zumba goddess will give you the most entertaining lessons of your life. 
			As a trained Zumba instructor her aim is to stop your brain from worrying by 
			getting your hips moving. Never mind if your endurance is "yea" or rather 
			"nay" &ndash; there's the right course for everyone. <p/>
			</td>
		
		</tr>
		
		<tr>
			<td> <p class="data"> Course: <a href="course-Zumba.html"> Zumba </a> <br> Email: beispiel@email.com</p></td>
		</table>
		<br><br><br>

		<table border="1">
		<tr>
			<td colspan="2"><h2>Serena Li</h2></td></tr>
		
		<tr>
			<td colspan="3" rowspan="3">
				<span id="placeholderImg">
					<span id="person"> <img class="cImg" src="../Img/Profilepics/Serena.jpeg" alt="Photo of Serena Li"> </span>
					<span id="onhover"> <img class="cImg" src="../Img/Profilepics/Serena2.jpeg" alt = "Photo of a landview"> </span>
				</span>
			</td>
			
			<td colspan="4">
				<p class="text"> 
				Even though Serena is our youngest team member her photographic skills never go unnoticed. 
			If it's her photos on Instagram, liked by her one million followers or her most 
			recent exhibition in Vienna, her work will amaze you. Now it is your chance to get an insight 
			in her way of working. With her knowledge she will point you in the right direction of becoming 
			a great photographer yourself. 
			With her help, your captured memories will give you so much joy&hellip; you'll see.<p/>
			</td>
		
		</tr>
		
		<tr>
			<td> <p class="data"> Course: <a href="course-Photography.html"> Photography </a> <br> Email: beispiel@email.com</p></td>
		</table>
		<br><br><br>

		<table border="1">
		<tr>
			<td colspan="2"><h2>Thomas Kellner</h2></td></tr>
		
		<tr>
			<td colspan="1" rowspan="2">
				<span id="placeholderImg">
					<span id="person"> <img class="cImg" src="../Img/Profilepics/Thomas.jpeg" alt="Photo of normal Thomas Kellner"> </span>
					<span id="onhover"> <img class="cImg" src="../Img/Profilepics/Thomas2.jpeg" alt = "Photo of Demon-Slayer Thomas"> </span>
				</span>
			</td>
			
			<td colspan="4">
				<p class="text"> 
				Thomas or the demon slayer (as his friends call him) will teach you the arts of demon exorcism 
			and demon summoning. He has perfected his skills by studying abroad and attended various master 
			classes - among others Lilith Stormshadow or Igor Zaratan - taught by well-known demon fighters. 
			Feeling a bit scared? No need. Thomas offers the best guidance during his certified trainings.<p/>
			</td>
		
		</tr>
		
		<tr>
			<td> <p class="data"> Course: <a href="course-Origami.html"> Origami </a> <br> Email: beispiel@email.com</p></td>
		</table>		
				
	</div>
	</main>
</div>
		
		
		
		
		
</body>


</html>
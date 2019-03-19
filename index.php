<?php
  session_start();
?>
<!DOCTYPE html>
<head>
  <title>CSS Website Layout</title>
  <html lang="de">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
* {
  box-sizing: border-box;
}
body {
  font-family: Bell MT, Helvetica, sans-serif;
  letter-spacing: 3px;
  background-image: url("unbenannt.jpg");
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #fff;
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

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #F0F0EF;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 130px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
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

.footer {
    position:fixed;bottom:0;
	background-color: #fff;
   
    display:block;
	padding: 6px 8px;
	box-shadow: 0 3px 20px 0 black;
	 width: 100%;

}

img {
	box-shadow: 0 6px 25px 0 black;

}

div.absolute {
  position: absolute;
  top: 40px;
  right: 100px;
  border: none;
}



.fakeimg {
  background-color: white;
  width: 100%;
}

h2 { 
   position: absolute; 
   right: 0;
   top: 355px; 
   margin-right: 90px; 
   width: 100%; 
   font-family: Bell MT, Helvetica, sans-serif;
   letter-spacing: 3px;
   text-shadow: 0 3px 20px 3px black;
   color: white;
   font-size: 30px;
}

h3 { 
   right: 0;
   top: 355px; 
   margin-left: 20px; 
   margin-bottom: 70px; 
   font-family: Bell MT, Helvetica, sans-serif;
   letter-spacing: 3px;
   text-shadow: 0 3px 20px 0 black;
   color: black;
   font-size: 15px;
}

input[type=text], select, textarea {
  width: 160%;
  padding:12px;
  border: none;
  position:absolute;
  resize: vertical;
  background:white;
}


  {background: rgba(255, 255, 255, 0.2);}
  
  
input[type=submit]: {
  background-color: white;

}

.container {
  border: none;
  border-radius:20px;
  padding: 0px;
  width: 20%;
 margin-right: auto;
 margin-left: 00px;
 margin-top: 50px;

}

.search-button {
  cursor: pointer;
  border: none;
  background: none;
}

#bgNew2 {
width: 400px;
height: 300px;
margin-top: 50px;
position:relative;
margin-left: auto;
margin-right: auto;
}

#bgNew2 p {
font-size: 18px;
font-weight: bold;
background: rgba(255, 255, 255, 0.8);
margin-left: auto;
margin-right: auto;
margin-top: 50px;
padding: 20px;
border-radius:20px;
box-shadow: 0 8px 20px 3px grey;
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

.column {
  float: left;
  width: 33%;
  padding: 0px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}
/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}
/* Left and right column */
.column.side {
  width: 25%;
}
/* Middle column */
.column.middle {
  width: 50%;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
    float: none;
  }
}
/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}
  table {
    border-collapse: collapse;
    width: 100%;
  }
  th, td {
    text-align: left;
    padding: 8px;
  }
  tr:nth-child(2n){background-color: #f2f2f2}
  th {
    background-color: #4CAF50;
    color: white;
  }
 
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

  input[type=password], input[type=email], input[type=url], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

input[type=button] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=button]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<nav class="topnav">
  <?php
    // Include the right Nav-Bar depending if the user is logged in
    if (isset($_SESSION['login'])){
      include("loginnav.inc.php");
    }
    else
    {
      include('nav.inc.php');
    }
  ?>
</nav>
<div class="row">
  <main class="column middle" name="Haupt" id="Haupt">
    <?php
      if (isset($_REQUEST['content'])){
        include($_REQUEST['content'].".inc.php");
      }
      else
      {
        include('main.inc.php');
      }
    ?>
	
	
	<div class="navbar">
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.html">About</a>
  <a href="#">Courses</a>
  <a href="#">Clients</a>
  <a href="contact.html">Contact</a>
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


	<a class="active" href="homepage.html"><i class="fa fa-fw fa-home"></i>HOME</a>

<div class="dropdown">
    <button class="dropbtn"><i class="fa fa-camera-retro"></i> COURSES 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://www.origami-fun.com/origami-online.html" target= "blank">Origami</a>
      <a href="https://www.zumba.com" target= "blank">Zumba</a>
      <a href="https://photographycourse.net/"target= "blank">Photography</a>
    </div>


  </div>
  

<a href="index.php?content=login" style="float:right"><i class="fa fa-fw fa-user"></i> LOGIN</a>



<a href="shoppingcart.html"style="float:right"><i class="fa fa-shopping-cart"></i> SHOPPING CART</a>

<div class="dropdown" style="float:right">
    <button class="dropbtn"><i class="fa fa-search"></i>
   
    </button>
    <div class="dropdown-content">
	<div class="search-container">
			<form method="get" action="http://google.com/search">
				<input type="text" placeholder="Search..." name="q">
				<button class="search-button"></button>
			</form>
		</div>
      
    </div>
  </div>


<a class="active" href="contact.html"><i class="fa fa-fw fa-envelope"></i> CONTACT</a>
<div class="dropdown">
	<button class="dropbtn"><i class="fa fa-users"></i></i> TEAM
	<i class="fa fa-caret-down"></i>
    </button>
	<div class="dropdown-content">
      <a href="#">Elisabeth</a>
      <a href="#">Anna</a>
      <a href="#">Gaelle</a>
	  <a href="https://about.me/judytakrz" target= "blank">Judyta</a>
	  <a href="#">Serena</a>
	  <a href="#">Thomas</a>
	  
    </div>
	
</div>
</div>
     </div>
		  </div>
			
		
		<div class="fakeimg" style="height:600px;">
		<img src="slide1.jpg" style="height:100%; width:100%">
		<h2 align="right">
		</br>
		</br>
		</br>
		</br>
		Something incredible is waiting to be discovered
		
		</h2>
		
		
		<h2>What are we offering?</h2>
		
	<div>
		<div class="column" style="background-color:transparent;">
			<main id="bgNew2"><p>
			50% Lorem ipsum dolor sit amet, 
			consectetuer adipiscing elit, sed diam nonummy nibh 
			euismod tincidunt ut laoreet dolore magna aliquam erat 
			volutpat. Ut wisi enim ad minim veniam, quis Lorem 
			ipsum dolor sit amet, consectetuer adipiscing elit, 
			sed diam nonummy nibh eui</p></main>
		</div>
		
		<div class="column" style="background-color:transparent;">
		<h2>Column 2</h2>
			<main id="bgNew2"><p>50% Lorem ipsum dolor sit amet, 
			consectetuer adipiscing elit, sed diam nonummy nibh 
			euismod tincidunt ut laoreet dolore magna aliquam erat 
			volutpat. Ut wisi enim ad minim veniam, quis Lorem 
			ipsum dolor sit amet, consectetuer adipiscing elit, 
			sed diam nonummy nibh eui</p></main>
		</div>
		
		<div class="column" style="background-color:transparent;">
		<h2>Column 3</h2>
			<main id="bgNew2"><p>50% Lorem ipsum dolor sit amet, 
			consectetuer adipiscing elit, sed diam nonummy nibh 
			euismod tincidunt ut laoreet dolore magna aliquam erat 
			volutpat. Ut wisi enim ad minim veniam, quis Lorem 
			ipsum dolor sit amet, consectetuer adipiscing elit, 
			sed diam nonummy nibh eui</p></main>
		</div>
	
		<div class="column" style="background-color:transparent;">
			<main id="bgNew2"><p>
			50% Lorem ipsum dolor sit amet, 
			consectetuer adipiscing elit, sed diam nonummy nibh 
			euismod tincidunt ut laoreet dolore magna aliquam erat 
			volutpat. Ut wisi enim ad minim veniam, quis Lorem 
			ipsum dolor sit amet, consectetuer adipiscing elit, 
			sed diam nonummy nibh eui</p></main>
		</div>
		
		<div class="column" style="background-color:transparent;">
		<h2>Column 2</h2>
			<main id="bgNew2"><p>50% Lorem ipsum dolor sit amet, 
			consectetuer adipiscing elit, sed diam nonummy nibh 
			euismod tincidunt ut laoreet dolore magna aliquam erat 
			volutpat. Ut wisi enim ad minim veniam, quis Lorem 
			ipsum dolor sit amet, consectetuer adipiscing elit, 
			sed diam nonummy nibh eui</p></main>
		</div>
		
		<div class="column" style="background-color:transparent;">
		<h2>Column 3</h2>
			<main id="bgNew2"><p>50% Lorem ipsum dolor sit amet, 
			consectetuer adipiscing elit, sed diam nonummy nibh 
			euismod tincidunt ut laoreet dolore magna aliquam erat 
			volutpat. Ut wisi enim ad minim veniam, quis Lorem 
			ipsum dolor sit amet, consectetuer adipiscing elit, 
			sed diam nonummy nibh eui</p></main>
		</div>
		
		<div>
		<div class="column" style="background-color:transparent;">
			<main id="bgNew2"><p>
			50% Lorem ipsum dolor sit amet, 
			consectetuer adipiscing elit, sed diam nonummy nibh 
			euismod tincidunt ut laoreet dolore magna aliquam erat 
			volutpat. Ut wisi enim ad minim veniam, quis Lorem 
			ipsum dolor sit amet, consectetuer adipiscing elit, 
			sed diam nonummy nibh eui</p></main>
		</div>
		
		<div class="column" style="background-color:transparent;">
		<h2>Column 2</h2>
			<main id="bgNew2"><p>50% Lorem ipsum dolor sit amet, 
			consectetuer adipiscing elit, sed diam nonummy nibh 
			euismod tincidunt ut laoreet dolore magna aliquam erat 
			volutpat. Ut wisi enim ad minim veniam, quis Lorem 
			ipsum dolor sit amet, consectetuer adipiscing elit, 
			sed diam nonummy nibh eui</p></main>
		</div>
		
		<div class="column" style="background-color:transparent;">
		<h2>Column 3</h2>
			<main id="bgNew2"><p>50% Lorem ipsum dolor sit amet, 
			consectetuer adipiscing elit, sed diam nonummy nibh 
			euismod tincidunt ut laoreet dolore magna aliquam erat 
			volutpat. Ut wisi enim ad minim veniam, quis Lorem 
			ipsum dolor sit amet, consectetuer adipiscing elit, 
			sed diam nonummy nibh eui</p></main>
		</div>
		</div>
		
		<div>
		
		<h3> Some text...
		</br>
		</br>
		</br>
		</br>
		is comming here,
		</br>
		</br>
		</br>
		</br>
		or maybe some pictures,
		</br>
		</br>
		</br>
		</br>
		who knows...
		
		The distinction between the decorative and fine arts essentially arose 
		from the post-Renaissance art of the West, where the distinction is for 
		the most part meaningful. This distinction is much less meaningful when 
		considering the art of other cultures and periods, where the most valued 
		works, or even all works, include those in decorative media. For example, 
		Islamic art in many periods and places consists entirely of the decorative
		arts, often using geometric and plant forms, as does the art of many 
		traditional cultures. The distinction between decorative and fine arts is 
		not very useful for appreciating Chinese art, and neither is it for 
		understanding Early Medieval art in Europe. In that period in Europe, fine 
		arts such as manuscript illumination and monumental sculpture existed, but 
		the most prestigious works tended to be in goldsmith work, in cast metals such
		as bronze, or in other techniques such as ivory carving. Large-scale 
		wall-paintings were much less regarded, crudely executed, and rarely mentioned 
		in contemporary sources. They were probably seen as an inferior substitute for 
		mosaic, which for the period must be considered a fine art, though in recent 
		centuries mosaics have tended to be considered decorative. The term "ars sacra"
		("sacred arts") is sometimes used for medieval Christian art executed in metal, 
		ivory, textiles, and other more valuable materials but not for rarer secular 
		works from that period.
		</h3>
		</div>


</map>
		
		</div></div>
		
		
		
		
		
		
		
		
		
    
			
         <div class="footer">
           <center>
               Copyright © 2019 <a href="https://about.me/judytakrz">relaxDIY.com</a>
           </center>
         </div>
			
      </div>

	
	
  </main>
</div>









</body>
</html>

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
  margin-top:20px;
  margin-left:20px;
  width: 35%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
	</style>


<body id="generalBackground">

	<div class="header" style="box-shadow: 0 6px 15px 0 grey; height:200px;">
  <h1 style="margin-top:50px">Check out our courses</h1>
  <p><img src="Img/_coursepics/logocourses.jpg" style="max-width:60%; width:80px; height:80px; box-shadow:none;"></p>
   </div>
   
    <div class="row white-bgrnd" style="width:80%; margin-left:auto; margin-right:auto;">
	<div class="column" style="">
	<h3> Origami with Anna </h3>
	<ul>
                <li>Folding is fun – Helpful things to know before you get started</li></br>
                <li>Tutorial – Crane</li></br>
                <li>Fold your own Christmas decorations</li>
            </ul>
			</br>
			</br>
			 <a id="goToid" class="goTo" href="origami.php"><b>Check out Anna's page!</b></a></br></br></br>       
	</div>

	<div class="column" style="margin-left:70px;">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/rhdvzoGbffs" 
	frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; 
	picture-in-picture" allowfullscreen></iframe>

   </div>
   </div>
   <!--------------------------------------------------------------------------------------------------------------------------------->
       <div class="row white-bgrnd" style="width:80%; margin-left:auto; margin-right:auto;">
	<div class="column" style="">
	<h3> Zumba with Judyta </h3>
			
            <ul>
                <li>Strong by Zumba  </li></br>
                <li>Zumba for nerds  </li></br>
                <li>Zumbini – Zumba for mommies & babies  </li>
            </ul>
			</br>
			</br>
            <a id="goToid" class="goTo" href="zumba.php"><b>Check out Judyta's page!</b></a></br></br></br>       
	</div>

	<div class="column" style="margin-left:70px;">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/0e3hSPBz9TE" 
		frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; 
		picture-in-picture" allowfullscreen></iframe>

   </div>
   </div>
     <!--------------------------------------------------------------------------------------------------------------------------------->
	 
<div class="row white-bgrnd" style="width:80%; margin-left:auto; margin-right:auto;">
	<div class="column" style="">
	<h3> Calligraphy with Elisabeth </h3>
			
           <ul>
                <li>Hand lettering: 4 easy steps to modern calligraphy </li></br>
                <li>The ultimate guide to iPad lettering </li></br>
                <li>How to find your own calligraphy style </li>
            </ul>
			</br>
			</br>
            <a id="goToid" class="goTo" href="calligraphy.php"><b>Check out Elisabeth's page!</b></a></br></br></br>       
	</div>

	<div class="column" style="margin-left:70px;">
	<iframe width="560" height="315"  src="https://www.youtube.com/embed/BeHqBYJ3rPE" frameborder="0" 
	allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

   </div>
   </div>
   
   
      <!--------------------------------------------------------------------------------------------------------------------------------->
	 
<div class="row white-bgrnd" style="width:80%; margin-left:auto; margin-right:auto;">
	<div class="column" style="">
	<h3> Cooking with Gaelle </h3>
			
           <ul>
                <li>Peanut butter rocks!  </li></br>
                <li>My life with garlic – The perfect seasoning  </li></br>
                <li>13 ways to cook sweet potatoes  </li>
            </ul>
			</br>
			</br>
            <a id="goToid" class="goTo" href="cooking.php"><b>Check out Gaelle's page!</b></a></br></br></br>      
	</div>

	<div class="column" style="margin-left:70px;">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/URdX9rFIbcc" frameborder="0" 
	allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

   </div>
   </div>

        <!--------------------------------------------------------------------------------------------------------------------------------->
	 
<div class="row white-bgrnd" style="width:80%; margin-left:auto; margin-right:auto;">
	<div class="column" style="">
	<h3> Photography with Serena </h3>
			
           <ul> <!-- The <td> tag defines a standard cell in an HTML table.-->
                <li>Your road to better photography </li></br>
                <li>How to make the most of Instagram filters </li></br>
                <li>iPhone Photography - The best tool is the one you always have around </li>
            </ul>
			</br>
			</br>
            <a id="goToid" class="goTo" href="photography.php"><b>Check out Serena's page!</b></a></br></br></br>      
	</div>

	<div class="column" style="margin-left:70px;">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/BcKsksSniPw" frameborder="0" 
	allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

   </div>
   </div>
   
          <!--------------------------------------------------------------------------------------------------------------------------------->
		  
		  
		<div class="row white-bgrnd" style="width:80%; margin-left:auto; margin-right:auto; margin-bottom:70px;">
	<div class="column" style="">
	<h3> Demons with Thomas </h3>
			
           <ul>
                <li>Game of demons  </li></br>
                <li>How to kill a demon – The basics  </li></br>
                <li>The road to exorcism – When is it really necessary?  </li>
            </ul>
			</br>
			</br>
            <a id="goToid" class="goTo" href="demon.php"><b>Check out Thomas' page!</b></a></br></br></br>      
	</div>

	<div class="column" style="margin-left:70px;">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/I4UYjzxoano" frameborder="0" 
	allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

   </div>
   </div>  
		  
  





</body>
</html>
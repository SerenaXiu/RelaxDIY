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

#dots {
	margin: 10px;
}

.slideshow-container {
  max-width: 100%; height: auto;
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
    max-width: 100%; height: auto;
	border-radius:15px;
	box-shadow: 0 6px 25px 0 black;
}

.zoom {
 padding:10px;
 background:rgba(255,255,255, 0.90);

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

.scroll {
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
			
	</header>

	<main>

		<div class="slideshow-container">

			<div class="mySlides fade col-md-12">
			  <img src="Img/Slidegallery/slide1.jpg" style="max-width: 100%; height: auto; border-radius:0px;">
			 
			 <a class="scroll" href="#section2"><img alt="scroll down" style="height: 50px; width:60px;
								margin-top:-80px; margin-right: 30px; position:absolute; border-radius: 30px; "src="https://www.solodev.com/assets/anchor/arrow-down.png"></a>
			
			
			
			</div>
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

	<div id="dots" style="text-align:center">
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

	<div >
		<section id="section1" class="white-bgrnd" style="padding:5px;">
		<h2 style="margin-left:50px"> 				
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
				</h2>			
			</section>
		
		
			<section id="section2">
			<div class="center">
				<a href="https://www.w3schools.com">
				<img class="zoom" border="0" alt="Zumba" src="Img/Judyta/calligrslide123.jpg" style="width:45%; height:300px; margin-left:20px;">
				
				
				<a href="https://www.w3schools.com">
				<img class ="zoom" border="0" alt="Zumba" src="Img/Judyta/zumbaslidee1.jpg" style="width:45%; height:300px; margin-left:20px;">
			</div>
			
				</br>
				</br>

			<div class="center">
				<a href="https://www.w3schools.com">
				<img class="zoom" border="0" alt="Zumba" src="Img/Judyta/sliden33.jpg" style="width: 21%; height:300px; margin-left:none;">
				<a href="https://www.w3schools.com">
				<img class="zoom" border="0" alt="Zumba" src="Img/Judyta/sliden444.jpg" style="width: 21%; height:300px; margin-left:15px;">
				<a href="https://www.w3schools.com">
				<img class="zoom" border="0" alt="Zumba" src="Img/Judyta/sliden99999.jpg" style="width: 21%; height:300px; margin-left:20px;">
				<a href="https://www.w3schools.com">
				<img class="zoom" border="0" alt="Zumba" src="Img/Judyta/sliden7777.jpg" style="width: 21%; height:300px; margin-left:20px; margin-right:-10px;">
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
		
			<section id="section3">
				<div class="white-bgrnd" style="margin-bottom:90px">

				/*about */

				</div>
			</section>
			

</main>

	
</body>
</html>

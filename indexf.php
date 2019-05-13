<?php
  session_start();

    // includes the outsourced footer & navbar.
	include "PHP/footer.php";
	include "PHP/navbar.php";

?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset='utf-8'>
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
	  <img src="Img/Slidegallery/slied21.jpg" style="width:100%">

	</div>

	<div class="mySlides fade">
	  <img src="Img/Slidegallery/slidee31.jpg" style="width:100%">

	</div>

	<div class="mySlides fade">
	  <img src="Img/Slidegallery/slide41.jpg" style="width:100%">

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

	
		<section id="section1" class="white-bgrnd" style="padding:5px; overflow:hidden">
		<h3 style="margin:30px">
					<?php

				$api_url = 'https://api.darksky.net/forecast/9d2e1fd7e2c4011fce1daa9fc49bd46c/48.209,16.37?exclude=minutely,hourly,daily,alerts,flags&units=ca';


				$data = file_get_contents($api_url);
				$clean_data = json_decode($data,TRUE);
				echo 'Current temperature: ';
				echo $clean_data['currently']['temperature'];
				echo ' °C';
				//echo '<script>alert($data);</script>';
				$temperature = $clean_data['currently']['temperature'];
				$weather = $clean_data['currently']['icon'];

				switch ($weather){
					case 'clear-day':
						if ($temperature > 20) {
							echo '<p>It&#039;s a beautiful day! How about a <a href="zumba.html" target= "blank">Zumba</a> course with Judyta in the park?</p>';
						}elseif ($temperature > 10){
							echo '<p>It&#039;s sunny but rather cold! Why don&#039;t you stay inside and improve your <a href="calligraphy.html"target= "blank">calligraphy</a> skills by watching one of Elisabeth&#039;s tutorials? &#128175 </p>';
						}else{
							echo '<p>It&#039;s very cold. Why don&#039;t you <a href="cooking.html"target= "blank">cook</a> some warming pumkin soup following Gaelle&#039;s instructions?</p>';
						}
						break;

					case 'clear-night':
						if ($temperature > 10) {
						    echo '<p>It&#039;s a clear night! Perfect time to <a href="daemons.html"target= "blank">summon some demons</a>!</p>';
                        } else {
						    echo '<p>It&#039;s pretty cold this night! Why don&#039;t you stay inside and improve your <a href="calligraphy.html"target= "blank">calligraphy</a> skills?</p>';
                        } break;

					case 'rain':
					    if ($temperature > 20) {
                            echo '<p>Ah a rainy day but still pretty warm! You could go outside and improve your <a href="photgraphy.html">photography</a> skills.</p>';
                        } elseif ($temperature > 10) {
                            echo '<p>Ah a rainy day! You could try some <a href="origami.html">origami</a> at home following Anna&#039;s instructions.</p>';
                        } else {
                            echo '<p>Ah a rainy day and really cold! You could try to summon some nice weather <a href="demons.html">demons</a> following Thomas&#039; instructions.</p>';
                        }
						break;

					case 'snow':
						echo '<p>Ah a snowy day! You could try some <a href="origami.html">origami</a> or improve your <a href="calligraphy.html"target= "blank">calligraphy</a> skills.</p>';
						break;

					case 'sleet':
						if ($temperature > 18) {
							echo '<p>Urgh sleet! Better stay inside and make some <a href="origami.html">origami</a> following Anna&#039;s instructions.</p>';
						}else{
							echo '<p>Urgh sleet & pretty cold. Better stay at home and try out one of Serena&#039;s <a href="photgraphy.html">photography</a> courses.</p>';
						}
						break;

					case 'wind':
                        if ($temperature > 18) {
                            echo '<p>Very windy today but nice temperatures! Better stay inside and make some <a href="origami.html">origami</a></p>';
                        }else{
                            echo '<p>Urgh windy and not too warm today. Better stay at home and try out one of Gaelle&#039;s <a href="cooking.html"target= "blank">cooking</a> courses.</p>';
                        }
                        break;

					case 'fog':
                        if ($temperature > 20) {
                            echo '<p>It&#039;s a foggy day but nice temperatures. How about some <a href="zumba.html" target= "blank">Zumba</a> in the park?</p>';
                        }elseif ($temperature > 10){
                            echo '<p>It&#039;s foggy and rather cold! Why don&#039;t you stay inside and improve your <a href="calligraphy.html"target= "blank">calligraphy</a> skills?</p>';
                        }else{
                            echo '<p>It&#039;s very cold today and so much fog! Why don&#039;t you try to summon some nice weather <a href="demons.html">demons</a> following Thomas&#039; instructions.</p>';
                        }
                        break;

					case 'cloudy':
                        if ($temperature > 20) {
                            echo '<p>It&#039;s a cloudy day but such nice temperatures! How about some <a href="zumba.html" target= "blank">Zumba</a> in the park?</p>';
                        }elseif ($temperature > 10){
                            echo '<p>It&#039;s cloudy and rather cold! Better stay inside and improve your<a href="photogrpahy.html"target= "blank">photography</a> skills with Serena&#039;s help.</p>';
                        }else{
                            echo '<p>It&#039;s very cold today and so cloudy! Why dont you stay inside and fold some <a href="origami.html"target= "blank">Origami</a> objects?</p>';
                        }
                        break;

					case 'partly-cloudy-day':
                        if ($temperature > 20) {
                            echo '<p>It&#039;s cloudy but still warm! How about some <a href="zumba.html" target= "blank">Zumba</a> to clear your mind?</p>';
                        }elseif ($temperature > 10){
                            echo '<p>It&#039;s cloudy and rather cold. Why don&#039;t you stay inside and improve your <a href="calligraphy.html"target= "blank">calligraphy</a> skills?</p>';
                        }else{
                            echo '<p>It&#039;s very cold today. Why don&#039;t you <a href="cooking.html"target= "blank">cook</a> some warming potato soup?</p>';
                        }
                        break;

					case 'partly-cloudy-night':
                        if ($temperature > 20) {
                            echo '<p>It&#039;s cloudy but still warm! How about some nightime <a href="zumba.html" target= "blank">Zumba</a> to clear your mind?</p>';
                        }elseif ($temperature > 10){
                            echo '<p>It&#039;s cloudy and rather cold and pretty late anyway. Why don&#039;t you stay inside and improve your <a href="origami.html"target= "blank">Origami</a> skills?</p>';
                        }else{
                            echo '<p>It&#039;s very cold today. Why don&#039;t you <a href="cooking.html"target= "blank">cook</a> a midnight supper with Gaelle&#039;s help?</p>';
                        }
                        break;

				}
					?>
				</h3>
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
				
					<div id="aboutText">
						<a class="not-active" href="http://localhost:8081/RelaxDIY/_index.php" >   
							<h4> About RelaxDIY </h4>
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
								</br> <b>
									Scroll through our one&#45;of&#45;a&#45;kind course offers </br>
									and find the one that will help you to relax. </b>
							</p>
							</br>
							
							<a id="goToid" class="goTo "href="_courses.php"><b>&#8702; Go to Courses</b></a>
							
						</a>
					</div>
				</div>
			</section>
			

</main>

	
</body>
</html>

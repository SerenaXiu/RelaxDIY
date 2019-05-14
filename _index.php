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

#containerscroll{display:block;}
#containerscrollM{display:none;}

@media screen and (max-width:1023px)
	{
	#containerscroll{display:none;}
	#containerscrollM{display:block;}	
	}


</style>

<body>

	<header>
			
	</header>

	<main>


		<div id="slideshow-container" style="position:relative">
			<div class="slideshow-current">
				<div class="mySlides fade">
				  <img src="Img/_slideshow/slide1.jpg" style="max-width: 100%; height: auto; border-radius:0px;">
					
					<!--- desktop -->
					<div id="containerscroll" style="z-index:9; margin: auto; margin-top:-100px; margin-bottom:70px; width: auto; max-width:50px; max-height:50px; height:10%;">
					 <a class="scroll" href="#section2"><img alt="scroll down" style=" border-radius:90%; max-height:100%; max-width: 100%;"
					 src="https://www.solodev.com/assets/anchor/arrow-down.png"></a>
					</div>
					
					<!--- mobile -->
					<div id="containerscrollM" style="z-index:9; margin: auto; margin-top:-60px; margin-bottom:40px; width: auto; max-width:30px; max-height:30px; height:10%;">
					 <a class="scroll" href="#section2"><img alt="scroll down" style=" border-radius:90%; max-height:100%; max-width: 100%;"
					 src="https://www.solodev.com/assets/anchor/arrow-down.png"></a>
					</div>
					
				</div>
			</div>
			
			<div class="mySlides fade">
			  <img src="Img/_slideshow/slide2.jpg" style="max-width: 100%; height: auto; border-radius:0;">
			</div>

			<div class="mySlides fade">
			  <img src="Img/_slideshow/slide3.jpg" style="max-width: 100%; height: auto; border-radius:0;">

			</div>

			<div class="mySlides fade">
			  <img src="Img/_slideshow/slide4.jpg" style="max-width: 100%; height: auto; border-radius:0;">

			</div>

<!--			<div id="dots" style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span>
			  <span class="dot" onclick="currentSlide(2)"></span>
			  <span class="dot" onclick="currentSlide(3)"></span>
			  <span class="dot" onclick="currentSlide(4)"></span>
			</div>
		</div>
-->
	<script>
	var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
} 
	</script>

	<div >
	<section id="section1" class="white-bgrnd" style="margin-top:20px;padding:5px; overflow:hidden">
		<h3 style="margin:30px">
					<?php

				$api_url = 'https://api.darksky.net/forecast/9d2e1fd7e2c4011fce1daa9fc49bd46c/48.209,16.37?exclude=minutely,hourly,daily,alerts,flags&units=ca';


				$data = file_get_contents($api_url);
				$clean_data = json_decode($data,TRUE);
				$temperature = $clean_data['currently']['temperature'];
				$weather = $clean_data['currently']['icon'];
				$roundTemp = round($temperature);
				echo 'Current Temperature: ';
				echo $roundTemp;
				echo '°C';
				
				//echo '<script>alert($data);</script>';
				

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
		
		
			<section id="section2" style="max-width:100%">
			
			<div class="flex center" style="border: 5px solid blue">
				<div class="row1" style="border: 3px solid red">
				<a href="calligraphy.php" style="margin: auto" ><img class="zoom"  alt="Calligraphy" src="Img/_gallery/gallery1.jpg" ></a>
				</div>
				
				<div class="row1" style="border: 3px solid red">
				<a href="zumba.php" style="margin: auto"><img class="zoom"  alt="Zumba" src="Img/_gallery/gallery2.jpg" ></a>
				</div>
			</div>
			
				</br>
				</br>

			<div class="flex center" style="border: 5px solid blue">
				<div class="row2" style="border: 3px solid black;">
				<a href="cooking.php" style="margin: auto" ><img class="zoom" border="0" alt="Cooking" src="Img/_gallery/gallery3.jpg"></a>
				</div>
				
				<div class="row2" style="border: 3px solid black;">
				<a href="demons.php" style="margin: auto"><img class="zoom" border="0" alt="Demon" src="Img/_gallery/gallery4.jpg"></a>
				</div>
				
				<div class="row2" style="border: 3px solid black;">
				<a href="photography.php" style="margin: auto"><img class="zoom" border="0" alt="Photography" src="Img/_gallery/gallery5.jpg"></a>
				</div>
				
				<div class="row2" style="border: 3px solid yellow;">
				<a href="origami.php" style="margin: auto"><img class="zoom" border="0" alt="Origami" src="Img/_gallery/gallery6.jpg"></a>
				</div>
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
		
<section id="section3" style="clear:left">
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

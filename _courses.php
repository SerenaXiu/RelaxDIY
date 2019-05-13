<?php
  session_start();
	
	include "PHP/footer.php";
	include "PHP/navbar.php";
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="CSS/team.css" type="text/css" rel="stylesheet">
		<link href="CSS/general.css" type="text/css" rel="stylesheet">

        <script src="myScript.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>

    <style>
    </style>


<body>

	<header>
	</header>

	<main class="white-bgrnd" style="overflow:hidden; margin-bottom:70px;">

        <h1> Check out our courses… </h1>


    <!-------------------------------DESKTOP----------------------------------->

    <div id="content-desktop" class="people">

        <div>
        <h3> Origami with Anna </h3>
            <ul>
                <li>Folding is fun – Helpful things to know before you get started</li></br>
                <li>Tutorial – Crane</li></br>
                <li>Fold your own Christmas decorations</li>
            </ul>
            <a id="goToid" class="goTo" href="origami.php""><b>Check out Anna's page!</b></a></br></br></br>
        </div>

        <div>
            <h3> Calligraphy with Elisabeth </h3>
            <ul>
                <li>Hand lettering: 4 easy steps to modern calligraphy </li></br>
                <li>The ultimate guide to iPad lettering </li></br>
                <li>How to find your own calligraphy style </li>
            </ul>
            <a id="goToid" class="goTo" href="writing.php"><b>Check out Elisabeth's page!</b></a></br></br></br>
        </div>

        <!---------------------------------------------------------------------------------------------------------->

        <div>
            <h3> Cooking with Gaelle </h3>
            <ul>
                <li>Peanut butter rocks!  </li></br>
                <li>My life with garlic – The perfect seasoning  </li></br>
                <li>13 ways to cook sweet potatoes  </li>
            </ul>
            <a id="goToid" class="goTo" href="cooking.php"><b>Check out Gaelle's page!</b></a></br></br></br>
        </div>

        <div>
            <h3> Zumba with Judyta </h3>
            <ul>
                <li>Strong by Zumba  </li></br>
                <li>Zumba for nerds  </li></br>
                <li>Zumbini – Zumba for mommies & babies  </li>
            </ul>
            <a id="goToid" class="goTo" href="_zumba.php"><b>Check out Judyta's page!</b></a></br></br></br>
        </div>



        <!---------------------------------------------------------------------------------------------------------->

        <div>
            <h3> Photography with Serena </h3>
            <ul> <!-- The <td> tag defines a standard cell in an HTML table.-->
                <li>Your road to better photography </li></br>
                <li>How to make the most of Instagram filters </li></br>
                <li>iPhone Photography - The best tool is the one you always have around </li>
            </ul>
            <a id="goToid" class="goTo" href="photography.php"><b>Check out Serena's page!</b></a></br></br></br>
        </div>

        <div>
            <h3> Demons with Thomas  </h3>
            <ul>
                <li>Game of demons  </li></br>
                <li>How to kill a demon – The basics  </li></br>
                <li>The road to exorcism – When is it really necessary?  </li>
            </ul>
            <a id="goToid" class="goTo" href="demons.php"><b>Check out Thomas' page!</b></a></br></br></br>
        </div>

    </div>


    <!---------------------------MOBILE---------------------------->


    <div id="content-mobile" class="people" >

        <div>
            <h3> Origami with Anna </h3>
            <ul>
                <li>Folding is fun – Helpful things to know before you get started</li></br>
                <li>Tutorial – Crane</li></br>
                <li>Fold your own Christmas decorations</li>
            </ul>
            <a id="goToid" class="goTo" href="origami.php""><b>Check out Anna's page!</b></a></br></br></br>
        </div>

        <div>
            <h3> Calligraphy with Elisabeth </h3>
            <ul>
                <li>Hand lettering: 4 easy steps to modern calligraphy </li></br>
                <li>The ultimate guide to iPad lettering </li></br>
                <li>How to find your own calligraphy style </li>
            </ul>
            <a id="goToid" class="goTo" href="writing.php"><b>Check out Elisabeth's page!</b></a></br></br></br>
        </div>

        <!---------------------------------------------------------------------------------------------------------->

        <div>
            <h3> Cooking with Gaelle </h3>
            <ul>
                <li>Peanut butter rocks!  </li></br>
                <li>My life with garlic – The perfect seasoning  </li></br>
                <li>13 ways to cook sweet potatoes  </li>
            </ul>
            <a id="goToid" class="goTo" href="cooking.php"><b>Check out Gaelle's page!</b></a></br></br></br>
        </div>

        <div>
            <h3> Zumba with Judyta </h3>
            <ul>
                <li>Strong by Zumba  </li></br>
                <li>Zumba for nerds  </li></br>
                <li>Zumbini – Zumba for mommies & babies  </li>
            </ul>
            <a id="goToid" class="goTo" href="_zumba.php"><b>Check out Judyta's page!</b></a></br></br></br>
        </div>

    <!---------------------------------------------------------------------------------------------------------->

        <div>
            <h3> Photography with Serena </h3>
            <ul>
                <li>Your road to better photography </li></br>
                <li>How to make the most of Instagram filters </li></br>
                <li>iPhone Photography - The best tool is the one you always have around </li>
            </ul>
            <a id="goToid" class="goTo" href="photography.php"><b>Check out Serena's page!</b></a></br></br></br>
        </div>

        <div>
            <h3> Demons with Thomas  </h3>
            <ul>
                <li>Game of demons  </li></br>
                <li>How to kill a demon – The basics  </li></br>
                <li>The road to exorcism – When is it really necessary?  </li>
            </ul>
            <a id="goToid" class="goTo" href="demons.php"><b>Check out Thomas' page!</b></a></br></br></br>
        </div>

    </div>

		
	</main>


</body>
</html>
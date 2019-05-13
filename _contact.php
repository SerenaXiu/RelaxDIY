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
	</header>

	<main>

	<!-- Contact Form -->
	<div class="container-contact" style="margin-bottom:70px;">
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



</body>
</html>

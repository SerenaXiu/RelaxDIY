<?php
$error='';

// Check to see if this run of the script was caused by our login submit button being clicked.
if (isset($_POST['login_submit'])) {

	// Also check that our username and password were passed along. If not, jump
	// down to our error message about providing both pieces of information.
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Connect to the database and select the user based on their provided username.
		// Be sure to retrieve their password and any other information you want to save for the user session.
		$pdo = new PDO("mysql:host=localhost;dbname=relaxdiy", "root", "");
		$pdo_query = $pdo->prepare("SELECT ID, username, password FROM login_data WHERE username = :username");
		$pdo_query->bindParam(':username', $username);
		$pdo_query->execute();
		$pdo_query->setFetchMode(PDO::FETCH_ASSOC);
		$row = $pdo_query->fetch();


		// If the user record was found, compare the password on record to the one provided hashed as necessary.
		// If successful, now set up session variables for the user and store a flag to say they are authorized.
		// These values follow the user around the site and will be tested on each page.
		if (($row !== false) && ($pdo_query->rowCount() > 0)) {
			if ($row['password'] == hash('sha256', $password)) {

				// is_auth is important here because we will test this to make sure they can view other pages
				// that are needing credentials.
				$_SESSION['is_auth'] = true;
				$_SESSION['user_id'] = $row['ID'];
				$_SESSION['username'] = $row['username'];

				// Once the sessions variables have been set, redirect them to the landing page / home page.
				header('location: index.php');
				exit;
			}
			else {
				$error = "Invalid username or password. Please try again.";
			}
		}
		else {
			$error = "Invalid username or password. Please try again.";
		}
	}
	else {
		$error = "Please enter a username and password to login.";
	}
}


<?php
session_start();

// Check to see if this run of the script was caused by our register submit button being clicked.
if (isset($_POST['reg_submit'])) {

	// Also check that our username and password were passed along. If not, jump
	// down to our error message about providing both pieces of information.
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Connect to the database and check if the username is available If not, jump
        // down to our error message that the username is in use already
        $pdo = new PDO("mysql:host=localhost;dbname=relaxdiy", "root", "");


        $pdo_query = $pdo->prepare("SELECT ID, username, password FROM login_data WHERE username = :username");
        $pdo_query->bindParam(':username', $username);
        $pdo_query->execute();
        $pdo_query->setFetchMode(PDO::FETCH_ASSOC);
        $row = $pdo_query->fetch();

        // If the username is available, hash the password and insert the new user to the database
		if ($pdo_query->rowCount() == 0) {
            $password_hashed = password_hash($password, PASSWORD_DEFAULT);

            $pdo_insert = $pdo->prepare("INSERT INTO login_data(username, password) VALUES(:username, :password_hashed)");
            //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo_insert->bindParam(':username', $username);
            $pdo_insert->bindParam(':password_hashed', $password_hashed);
            $pdo_insert->execute();

            $_SESSION['reg_check'] = "Registration successful.";

            header('location: index.php');
            exit;
		}
		else {
            $_SESSION['reg_failed'] = "Username already in use. Please try again.";
            header('location: index.php');
            exit;
		}
	}
	else {
        $_SESSION['reg_failed'] = "Please enter a username and password to register.";
        header('location: index.php');
        exit;
	}
}


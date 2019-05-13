<?php
session_start();
require_once("_dbcontroller.php");
$db_handle = new DBController;
// Check to see if this run of the script was caused by our register submit button being clicked.
if (isset($_POST['reg_submit'])) {

	// Also check that our username and password were passed along. If not, jump
	// down to our error message about providing both pieces of information.
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Connect to the database and check if the username is available
		// If not, jump down to our error message that the username is in use already
				$row = $db_handle->runQueryParam("SELECT ID, username, password FROM login_data WHERE username = :username", $username);

    // If the username is available, hash the password and insert the new user to the database
		if ($row == false) {
            $password_hashed = password_hash($password, PASSWORD_DEFAULT);
						$reg_user = $db_handle->regInsert("INSERT INTO login_data (username, password)
							VALUES (:username, :password_hashed)", $username, $password_hashed);
            $_SESSION['reg_check'] = "Registration successful.";
            header('location: _index.php');
            exit;
		}
		else {
            $_SESSION['reg_failed'] = "Username already in use. Please try again.";
            header('location: _index.php');
            exit;
		}
	}
	else {
        $_SESSION['reg_failed'] = "Please enter a username and password to register.";
        header('location: _index.php');
        exit;
	}
}

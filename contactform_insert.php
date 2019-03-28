<?php

// values received from html form
$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];
$email = $_POST['Email'];
$country = $_POST['Country'];
$message = $_POST['Message'];

// connection for database
$pdo = new PDO("mysql:host=localhost;dbname=contact_form", "root", "");
$statement = $pdo->prepare("INSERT INTO customerqueries (FirstName, LastName, Email, Country, Message) VALUES (?, ?, ?, ?, ?)");
$statement->execute(array('fname', 'lname', 'email', 'country', 'message'));

?>
 

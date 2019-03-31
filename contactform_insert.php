<?php

/* check if all variables were set */
if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['country']) && isset($_POST['message'])) {

    /* values received from html form */
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    /* connection to database though new pdo object */
    $pdo = new PDO("mysql:host=localhost;dbname=contact_form", "root", "");

    /* insert user input from form */
    $pdoQuery = "INSERT INTO customerqueries (ID, fname, lame, email, country, message) VALUES ('', :fname, :lname, :email, :country, :message)";
    $pdoResult = $pdo->prepare($pdoQuery);
    $pdoExec = $pdoResult->execute(array(
        ':fname' => $fname,
        ':lname' => $lname,
        ':email' => $email,
        ':country' => $country,
        ':message' => $message
    ));

    if ($pdoExec) {
        echo 'Thank you for your message';
    } else {
        echo 'Message failed!';
    }
}

?>
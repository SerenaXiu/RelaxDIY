<?php
session_start();

/* check if all variables were set */
//if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['country']) && isset($_POST['message'])) {
if (isset($_POST['msg_submit'])) {

    /* values received from html form */
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    try{
    /* connection to database though new pdo object */
    $pdo = new PDO("mysql:host=localhost;dbname=contact_form", "root", "");

    /* insert user input from form */
    $pdoQuery = "INSERT INTO customerqueries (fname, lname, email, country, message) VALUES (:fname, :lname, :email, :country, :message)";
    $pdoResult = $pdo->prepare($pdoQuery);
    $pdoResult->execute([
        ':fname' => $fname,
        ':lname' => $lname,
        ':email' => $email,
        ':country' => $country,
        ':message' => $message
    ]);

    $_SESSION['message'] = "Thank you for posting!";
    }
    catch (Exception $e) {
        $_SESSION['message'] = "Message failed";
    }
/*    // Message alert clientseitig - funktioniert nicht!
    if ($pdoExec) {
        echo "<script type='text/javascript'>alert('Thank you for your message');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Message failed');</script>";
    }*/

}
else {
    $_SESSION['message'] = "Oops, something went terribly wrong!";
}
header('location:_index.php');
exit;
?>

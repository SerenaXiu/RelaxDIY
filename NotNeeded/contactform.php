<?php

$fname = $_POST['fname']; // $fname =(isset($_POST['fname']) ? $_POST['fname'] : null); 
$lname = $_POST['lname'];
$visitor_email = $_POST['email'];
$country = $_POST['country'];
$message = $_POST['message'];

// FEHLERMELDUNG bei allen above: Notice: Undefined index: fname in C:\xampp\htdocs\contactform.php on line 3

// Composing the email message which we will receive
$email_from = "relaxdiycontact@gmail";
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $fname $lname from $country.\n". "Here is the message:\n $message".

// The PHP function to send email --> mail().
$to = "relaxdiycontact@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

?>
 
 // still needs validation (http://form.guide/email-form/php-form-to-email.html)

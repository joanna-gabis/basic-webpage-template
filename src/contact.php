<?php
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
  http_response_code(500);
  exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent="From: $name \n Message: $message";
$recipient = "joanna.gabis@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
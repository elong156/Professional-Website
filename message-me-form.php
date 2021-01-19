<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subhject = $POST['subject'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "eddie.long98@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you for reaching out! 

I appreciate you taking your time to contact me and I will be in touch with you soon!

Have an amazing day!";
?>
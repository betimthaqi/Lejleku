<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$formcontent="From: $firstname \n Message: $subject";
$emailto = "emailaddress@here.com";
$message = "Contact Form";
$mailheader = "From: $email \r\n";
mail($emailto, $message, $formcontent, $mailheader);
echo "Faleminderit!";
?>

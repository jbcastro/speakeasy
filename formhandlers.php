<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

$formcontent="From: $name \n Email: $email \n Subject: $subject \n Message: $message \n";
$recipient = "jumpstartpersonaltraining@gmail.com";
    $mailheader = "From: contact@jumpstartpersonaltraining.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='contact.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='edu2052@yourwebsite.com';
$email_subject='New form submission'.
$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "subject: $subject.\n".
            "User Message: $message.\n";

$to='brendaadongo23@gmail.com';
$headers="From: $email_from \r\n";
$headers .="Reply_To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");
?>

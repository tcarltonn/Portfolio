<?php

$myemail = "tsmit91@asu.edu";

$email_name = $_POST['name'];
$visitor_email = $_POST['email'];
$email_from = $myemail;
$email_subject = $_POST['subject'];
$email_comment = $_POST['comment'];
$date_sent = date('m/d/Y h:i:s a', time());

$message = "You have a new message from your contact form from: 

Name: $email_name 
Subject: $email_subject

Comments:
$email_comment


Date Sent: $date_sent 

";

$to = $myemail;
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
$headers .= "Cc: $visitor_email \r\n";

mail($to,$email_subject,$message,$headers);
header('Location: ContactForm.html');
?>
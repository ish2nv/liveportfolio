<?php
ini_set('display_errors', 'On');
	error_reporting(E_ALL);
$email =  $_POST['email'];
$subject =  $_POST['subject']." sent a msg from shahali.org";
$body =  $_POST['body'];
$headers = 'From: '.$email . "\r\n" .
    'Reply-To: '.$email ."\r\n" .
    'X-Mailer: PHP/' . phpversion();

echo mail("ishtiyaq93@gmail.com",$subject,$body,$headers);


?>
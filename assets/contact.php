<?php
//get data from form  

$w3lName = $_POST['w3lName'];
$w3lCompany = $_POST['w3lCompany'];
$w3lEmail = $_POST['w3lSender'];
$w3lMessage = $_POST['w3lMessage'];
$to = "info@chilambogeneral.co.tz";
$subject = "Mail From website | Contact Form";
$txt = "Name = " . $w3lName . "\r\n  Company = " . $w3lCompany . "\r\n Email =" . $w3lEmail . "\r\n Message =" . $w3lMessage;
$headers = "From: noreply@info@chilambogeneral.co.tz";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

//redirect
header("Location: /");

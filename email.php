<?php
use PHPMailer\PHPMailer\PHPMailer;

/* Include the Composer generated autoload.php file. */
require 'C:\xampp\composer\vendor\autoload.php';

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "talk2mecontact@gmail.com";
$mail->Password = "RickyEldonVivian";
$mail->SetFrom("talk2mecontact@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("vhp7cj@virginia.edu");

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message has been sent";
}
?>
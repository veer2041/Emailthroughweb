<?php
//require_once('PHPMailer/PHPMialerAutoload.php');
require './PHPMailer/src/Exception.php'; 
require './PHPMailer/src/PHPMailer.php'; 
require './PHPMailer/src/SMTP.php'; 
$mail             = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host       = "mail.yourdomain.com"; // SMTP server
//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 
$mail->Host       = "smtp.gmail.com";      // SMTP server
$mail->Port       = 465;                   // SMTP port
$mail->isHTML();
$mail->Username   = "rveeragoudar123@gmail.com";  // username
$mail->Password   = "4568452";            // password

$mail->SetFrom('rveeragoudar123@gmail.com', 'Test');

$mail->Subject    = "I hope this works!";


$address = "rveeragoudar123@gmail.com";
$mail->AddAddress($address, "Test");

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
?>

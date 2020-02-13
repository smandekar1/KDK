<?php

require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail ->isSMTP();
$mail ->SMTPAuth = true;
$mail ->SMTPSeure = 'ssl';
$mail ->Host = 'smtp.gmail.com';
$mail ->Port = '465';
$mail ->isHTML();
$mail ->Username = 'smahisekar@gmail.com';
$mail ->Password = 'hotgoogle';
$mail ->SetFrom('webmaster@yahoo.com');
$mail ->Subject = 'hello world';
$mail ->Body = 'A test email!';
$mail ->AddAddress('sam@kdkforging.com');

$mail ->Send();

?>


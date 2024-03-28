<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = 'c991462c8b91d7';
$phpmailer->Password = '793ef7243929ef';
$phpmailer->setFrom($email, $name . ' ' . $surname);
$phpmailer->addAddress('osmanm02@outlook.com');
$phpmailer->Subject = $subject;
$phpmailer->Body = $message;
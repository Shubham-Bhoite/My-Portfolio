<?php


require "vendor/autoload.php";

$mail = new PHPMailer;

$mail->setFrom('milindbh93@gmail.com', 'Milind Gaibu');
$mail->addAddress('arjunkadama29@gmail.com', 'Arjun K');
$mail->Subject = 'Subject of the email';
$mail->Body = 'Message body of the email';
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'milindbh93@gmail.com';
$mail->Password = 'Milind@93';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail->Body = 'Name: ' . $name . '<br>' . 'Email: ' . $email . '<br>' . 'Message: ' . $message;


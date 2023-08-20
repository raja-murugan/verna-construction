<?php

require 'PHPMailerAutoload.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$service = $_POST['service'];
$message = $_POST['message'];

$mail = new PHPMailer();

// $mail->SMTPDebug = 4;

$mail->SMTPOptions = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
    ],
];

$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'users.donotreplay@gmail.com';
$mail->Password = 'phtcllmjwuvfdujz';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('no-reply@vernaconstruction.com', 'Verna Engineers & Contractors');
$mail->addAddress('vernaconstruction@gmail.com');

$mail->isHTML(true);

$mail->Subject = 'Verna Engineers & Contractors - Enquiry Mail';
$mail->Body = "Contact Us - Enquiry <br><br>Name: {$name}<br><br>Email: {$email}<br><br>Mobile Number: {$phone}<br><br>Service: {$service}<br><br>Message: {$message}";

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header('Refresh:1; url=redirect.php');
    exit();
}

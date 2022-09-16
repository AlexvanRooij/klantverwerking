<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once('vendor/autoload.php');

if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["oms"])) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'alexvanrooij.nl';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'contact@alexvanrooij.nl';
        $mail->Password   = 'x';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->addAddress($_POST["email"]);
        $mail->setFrom('contact@alexvanrooij.nl', 'Contact');
        $mail->addCC('alex.rooij@icloud.com');

        $mail->isHTML(true);
        $mail->Subject = $_POST["oms"];
        $mail->Body    = 'temp';
        $mail->AltBody = 'temp';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<form method="POST" action="">
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="text" name="oms">
    <button type="submit">
</form>

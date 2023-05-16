<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'ssl0.ovh.net';
    $mail->SMTPAuth = true;
    $mail->Username = 'sofien.b@mc-solution.fr';
    $mail->Password = '24295890@sof';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );

    // Sender and recipient
    $mail->setFrom('sofien.b@mc-solution.fr', 'MC Billing');
    $mail->addAddress($_POST["email"]);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Low Balance';
    $mail->Body = 'This is a test email';

    // Send the email
    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo 'Failed to send email: ' . $mail->ErrorInfo;
}
?>
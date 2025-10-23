<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    $name = htmlspecialchars(trim($_POST["name"]));

    if ($email && !empty($subject) && !empty($message)) {
        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.kmtelecomsa.co.za';
            $mail->SMTPAuth = true;
            $mail->Username = 'support@kmtelecomsa.co.za';
            $mail->Password = 'D387V0171R7ib3';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Email content
            $mail->setFrom('support@kmtelecomsa.co.za', 'KMCT Quote Request');
            $mail->addAddress('support@kmtelecomsa.co.za');
            $mail->addReplyTo($email);
            $mail->Subject = 'Quote Request: ' . $subject;
            $mail->Body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

            $mail->send();
            echo "Message sent! Our team will be in touch soon. Please check your emails.";
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } else {
        echo "Invalid input. Please check your entries.";
    }
    exit;
}
?>
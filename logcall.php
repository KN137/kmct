<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if  ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    $name = htmlspecialchars(trim($_POST["name"]));
    $company = htmlspecialchars(trim($_POST["company"]));

    if ($email && !empty($subject) && !empty($message)) {
        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.kmtelecomsa.co.za';
            $mail->SMTPAuth = true;
            $mail->Username = 'info@kmtelecomsa.co.za';
            $mail->Password = 'KMCT3l3c0m@2026';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            // Email content
            $mail->setFrom('info@kmtelecomsa.co.za', $company .' logged a call');
            $mail->addAddress('khotso@kmtelecomsa.co.za');
            $mail->addReplyTo($email);
            $mail->Subject = 'The client is experiencing issues with: ' . $subject;
            $mail->Body = "Call logged by: $name\nEmail address: $email\n\nMessage:\n$message";

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
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    $name = htmlspecialchars(trim($_POST["name"]));
    $company = htmlspecialchars(trim($_POST["company"]));
    $address = htmlspecialchars(trim($_POST["address"]));
    $service_type = htmlspecialchars(trim($_POST["service_type"]));

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
            $mail->setFrom('support@kmtelecomsa.co.za', $name. 'is requesting a Quote');
            $mail->addAddress('info@kmtelecomsa.co.za');
            $mail->addReplyTo($email);
            $mail->Subject = 'Quote Request from : ' . $company;
            $mail->Body = "Name: $name\nEmail: $email\nPhone no: $phone\nAddress: $address\nService: $service\n\nMessage:\n$message";

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
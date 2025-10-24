<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email_quote"], FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(trim($_POST["phone_quote"]));
    $message = htmlspecialchars(trim($_POST["message_quote"]));
    $name = htmlspecialchars(trim($_POST["name_quote"]));
    $company = htmlspecialchars(trim($_POST["company_quote"]));
    $address = htmlspecialchars(trim($_POST["address_quote"]));
    
    if ($email && !empty($subject) && !empty($message)) {
        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.kmtelecomsa.co.za';
            $mail->SMTPAuth = true;
            $mail->Username = 'printer@kmtelecomsa.co.za';
            $mail->Password = 'KMCT3l3c0m@123';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Email content
<<<<<<< HEAD
            $mail->setFrom('support@kmtelecomsa.co.za', 'KMCT Quote Request');
            $mail->addAddress('support@kmtelecomsa.co.za');
=======
            $mail->setFrom('support@kmtelecomsa.co.za', name: $name. 'is requesting a Quote');
            $mail->addAddress('info@kmtelecomsa.co.za');
>>>>>>> f34b27ee830ec73d690c00a73af1eec596c27803
            $mail->addReplyTo($email);
            $mail->Subject = 'Quote Request from : ' . $company;
            $mail->Body = "Name: $name\nEmail: $email\nPhone no: $phone\nAddress: $address\nMessage:\n$message";

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
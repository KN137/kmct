<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailRaw = trim($_POST["email_qoute"] ?? '');
    $email = filter_var($emailRaw, FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(trim($_POST["phone_quote"] ?? ''));
    $service = htmlspecialchars(trim($_POST["service"] ?? ''));
    $message = htmlspecialchars(trim($_POST["message_quote"] ?? ''));
    $name = htmlspecialchars(trim($_POST["name_quote"] ?? ''));
    $company = htmlspecialchars(trim($_POST["company_quote"] ?? ''));
    $address = htmlspecialchars(trim($_POST["address_quote"] ?? ''));

    // NOTE: $subject is not sent from the form; validate required fields explicitly
    $errors = [];
    if (!$email) {
        $errors[] = 'A valid email is required.';
    }
    if (empty($name)) {
        $errors[] = 'Name is required.';
    }
    if (empty($company)) {
        $errors[] = 'Company name is required.';
    }
    if (empty($service)) {
        $errors[] = 'Please select a service type.';
    }

    if (!empty($errors)) {
        echo 'Invalid input: ' . implode(' ', $errors);
        exit;
    }

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
        $mail->setFrom('info@kmtelecomsa.co.za', $name . ' is requesting a Quote');
        $mail->addAddress('sales1@kmtelecomsa.co.za');
        $mail->addReplyTo($email);
        $mail->Subject = 'Quote Request from : ' . $company;
        $mail->Body = "Name: $name\nEmail: $email\nPhone no: $phone\nAddress: $address\nMessage:\n$message";

        $mail->send();
        echo "Message sent! Our team will be in touch soon. Please check your emails.";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

    exit;
}
?>
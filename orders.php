<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $address = htmlspecialchars(trim($_POST["address"]));
    $orders = htmlspecialchars(trim($_POST["orders"]));
    $name = htmlspecialchars(trim($_POST["name"]));
    $company = htmlspecialchars(trim($_POST["company"]));
    
    if ($email && !empty($orders)) {
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
            $mail->setFrom('info@kmtelecomsa.co.za', 'KMCT Order Request');
            $mail->addAddress('orders@kmtelecomsa.co.za');
            $mail->addReplyTo($email);
            $mail->Subject = 'Order Request from : ' . $company;
            $mail->Body = "Name: $name\nEmail: $email\nPhone no: $phone\nAddress: $address\nCompany: $company\n\nOrder Details:\n$orders";

            $mail->send();
            echo "Message sent! Our team will be in touch soon. Please check your emails.";
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } else {
        echo "Invalid input. Please check your entries and add at least one item.";
    }
    exit;
}
?>

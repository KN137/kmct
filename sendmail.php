<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
//new code for sendmail.php
$messageSent = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    $name = htmlspecialchars(trim($_POST["name"]));
    
    if ($email && !empty($subject) && !empty($message))
     {
        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.kmtelecomsa.co.za';
            $mail->SMTPAuth = true;
            $mail->Username = 'support@kmtelecomsa.co.za';
            $mail->Password = 'D387V0171R7ib3';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 456;

            // Email content
            $mail->setFrom('support@kmtelecomsa.co.za', $name . ' - KMCT Website');
            $mail->addAddress('support@kmtelecomsa.co.za');
            $mail->addReplyTo($email); // User's email for reply
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
            $messageSent = "Message sent!";
        } catch (Exception $e) {
            $messageSent = "Mailer Error: " . $mail->ErrorInfo;
        }
    } else {
        $messageSent = "Invalid input. Please check your entries.";
    }
}
?>



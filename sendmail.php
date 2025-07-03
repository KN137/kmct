<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    
    if ($email && !empty($subject) && !empty($message)) {
        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.kmtelecomsa.co.za'; // or another SMTP service
            $mail->SMTPAuth = true;
            $mail->Username = 'support@kmtelecomsa.co.za'; // Use your real SMTP username
            $mail->Password = 'KMCT3l3c0m@';    // Use an app password (not your Gmail password)
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Email content
            $mail->setFrom($email);
            $mail->addAddress('info@kmtelecomsa.co.za');
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
            echo "Message sent!";
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } else {
        echo "Invalid input. Please check your entries.";
    }
}
?>

<form action="sendmail.php" method="POST">
    <div>
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>
    </div>
    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
    </div>
    <button type="submit">Send Message</button>
</form>
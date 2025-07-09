<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$messageSent = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    
    //if ($email && !empty($subject) && !empty($message))
    
    if (true) {
        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.kmtelecomsa.co.za';
            $mail->SMTPAuth = true;
            $mail->Username = 'support@kmtelecomsa.co.za';
            $mail->Password = 'KMCT3l3c0m@';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Email content
            $mail->setFrom('support@kmtelecomsa.co.za', 'KMCT Website');
            $mail->addAddress('info@kmtelecomsa.co.za');
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

<?php if (!empty($messageSent)): ?>
    <p><?php echo $messageSent; ?></p>
    <p><?php echo $email; ?></p>
    <p><?php echo $subject; ?></p>
    <p><?php echo $message; ?></p>
<?php endif; ?>


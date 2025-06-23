<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $to = "info@kmtelecomsa.co.za";
    $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

    if ($email && !empty($subject) && !empty($message)) {
        $headers = "From: " . $email . "\r\n" .
                   "Reply-To: " . $email . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();
        if (mail($to, $subject, $message, $headers)) {
            echo "Message sent!";
        } else {
            echo "Failed to send message.";
        }
    } else {
        echo "Invalid input. Please check your entries.";
    }
}
?>
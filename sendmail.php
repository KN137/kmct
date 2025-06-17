<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "support@kmtelecomsa.co.za";
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "From: " . $_POST["email"];
    mail($to, $subject, $message, $headers);
    echo "Message sent!";
}
?>
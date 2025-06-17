<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "support@kmtelecomsa.co.za";
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "smtp.kmtelecomsa.co.za: " . $_POST["info@kmtelecoms.co.za"];
    mail($to, $subject, $message, $headers);
    echo "Message sent!";
}
?>
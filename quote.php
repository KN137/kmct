<?php
// Initialize variables
$name = $email = $message = "";
$success = $error = "";
$redirect = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["Name"] ?? ''));
    $email = filter_var(trim($_POST["Email"] ?? ''), FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST["Details"] ?? ''));

    if (!empty($name) && $email && !empty($message)) {
        $to = "rhameez@kmtelecomsa.co.za";
        $subject = "New Quote Request from $name";
        $body = "Name: $name\nEmail: " . ($_POST["Email"] ?? '') . "\nMessage:\n$message";
        $headers = "From: " . ($_POST["Email"] ?? '') . "\r\n";
        $headers .= "Reply-To: " . ($_POST["Email"] ?? '') . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        if (mail($to, $subject, $body, $headers)) {
            $success = "Thank you, your quote request has been sent! Redirecting to home page...";
            $redirect = true;
            $name = $email = $message = ""; // Clear form fields
        } else {
            $error = "Failed to send your request. Please try again later.";
        }
    } else {
        $error = "Please enter a valid name, email, and message.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Request Form</title>
    <style>
        .quote-form {
            background: #fff;
            max-width: 500px;
            margin: auto;
            padding: 30px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            border-radius: 12px;
        }
        .quote-form h2 {
            text-align: center;
            color: #4a4aff;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #4a4aff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .success { color: green; text-align: center; margin-bottom: 15px; }
        .error { color: red; text-align: center; margin-bottom: 15px; }
    </style>
</head>
<body>

<div class="quote-form">
    <h2>Request a Quote</h2>
    <?php if ($success): ?>
        <div class="success"><?php echo $success; ?></div>
    <?php elseif ($error): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
    <form action="" method="POST">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="Name" value="<?php echo htmlspecialchars($name); ?>" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="Email" value="<?php echo htmlspecialchars($email ? $_POST["Email"] : ''); ?>" required>

        <label for="details">Quote Details</label>
        <textarea id="details" name="Details" rows="5" required><?php echo htmlspecialchars($message); ?></textarea>

        <button type="submit">Send Request</button>
    </form>
</div>

<?php if ($redirect): ?>
    <script>
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 3000);
    </script>
<?php endif; ?>

</body>
</html>

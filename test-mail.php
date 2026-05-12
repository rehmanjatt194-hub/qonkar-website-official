<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$responseMsg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 2; // Enable SMTP Debugging as requested
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'qonkartechnologiespvtltd@gmail.com';
        $mail->Password   = 'kgqseilcjpdcqumz';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('qonkartechnologiespvtltd@gmail.com', 'Mailer Test');
        $mail->addAddress('qonkartechnologiespvtltd@gmail.com');
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Test Notification';
        $mail->Body    = "<h3>New Test Form Message</h3><p><b>Name:</b> {$name}</p><p><b>Email:</b> {$email}</p><p><b>Message:</b><br/>" . nl2br($message) . "</p>";
        $mail->AltBody = "Name: {$name}\nEmail: {$email}\nMessage: {$message}";

        // Start capturing debug output
        echo '<div style="background:#f0f0f0; border:1px solid #ccc; padding:10px; margin-bottom:20px;"><h3>SMTP Debug Log:</h3><pre>';
        $mail->send();
        echo '</pre></div>';
        
        $responseMsg = "<div style='color:green; font-weight:bold;'>Message sent successfully!</div>";
    } catch (Exception $e) {
        echo '</pre></div>'; // Close debug pre if caught early
        $responseMsg = "<div style='color:red; font-weight:bold;'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMTP Test Form</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        form { max-width: 400px; background: #f9f9f9; padding: 20px; border: 1px solid #ddd; }
        .field { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input, textarea { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Simple Email Test Form</h2>
    
    <?php if ($responseMsg) echo $responseMsg; ?>
    
    <form method="POST" action="">
        <div class="field">
            <label>Name</label>
            <input type="text" name="name" required>
        </div>
        <div class="field">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="field">
            <label>Message</label>
            <textarea name="message" rows="4" required></textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>
</body>
</html>

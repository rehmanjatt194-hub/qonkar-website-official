<?php
header('Content-Type: application/json; charset=utf-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// sanitize
$name = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone_number'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$budget = trim($_POST['budget'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Please fill all required fields.']);
    exit;
}

try {
    // DB connection
    $dbHost = 'localhost';
    $dbName = 'qonkarco_db';
    $dbUser = 'qonkarco_user';
    $dbPass = 'db_user1122@';

    $pdo = new PDO("mysql:host={$dbHost};dbname={$dbName};charset=utf8", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("
        INSERT INTO messages (full_name, email, phone_number, subject, budget, message)
        VALUES (:name, :email, :phone, :subject, :budget, :message)
    ");
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':subject' => $subject,
        ':budget' => $budget,
        ':message' => $message
    ]);

    // Send Email via PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'qonkartechnologiespvtltd@gmail.com';
        $mail->Password   = 'kgqseilcjpdcqumz';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL
        $mail->Port       = 465;

        // Crucial for many shared hosting setups to bypass local cert issues
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        //Recipients
        $mail->setFrom('qonkartechnologiespvtltd@gmail.com', 'Qonkar Notifications');
        $mail->addAddress('qonkartechnologiespvtltd@gmail.com'); // Sending notification to yourself
        $mail->addReplyTo($email, $name); // User's email as reply-to

        //Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Inquiry: " . ($subject ?: 'General Inquiry');
        
        $mailBody = "
            <h3>You have a new message from your website contact form</h3>
            <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
            <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
            <p><strong>Phone Number:</strong> " . htmlspecialchars($phone) . "</p>
            <p><strong>Subject:</strong> " . htmlspecialchars($subject) . "</p>
            <p><strong>Budget:</strong> " . htmlspecialchars($budget) . "</p>
            <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
        ";
        
        $mail->Body    = $mailBody;
        $mail->AltBody = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nSubject: {$subject}\nBudget: {$budget}\nMessage:\n{$message}";

        $mail->send();
        $mailStatus = "Sent";
    } catch (Exception $e) {
        $mailStatus = "Failed: " . $mail->ErrorInfo;
    }

    echo json_encode([
        'success' => true, 
        'message' => "Thank you, {$name}! Your message has been received.",
        'mail_status' => $mailStatus
    ]);
    exit;

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database error', 'detail' => $e->getMessage()]);
    exit;
}

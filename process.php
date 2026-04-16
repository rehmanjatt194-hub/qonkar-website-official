<?php
require_once 'db-path.php';
require_once ADMIN_URL . '/database_config.php';

header('Content-Type: application/json; charset=utf-8');

// Production Error Handling
ini_set('display_errors', 0);
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// sanitize
$name    = trim($_POST['full_name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone_number'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$budget  = trim($_POST['budget'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Please fill all required fields.']);
    exit;
}

// 4. Database Insert (Unified MySQLi)
$stmt = $conn->prepare("
    INSERT INTO messages (full_name, email, phone_number, subject, budget, message)
    VALUES (?, ?, ?, ?, ?, ?)
");

if (!$stmt) {
     http_response_code(500);
     echo json_encode(['error' => 'System error. Please try again later.']);
     exit;
}

$stmt->bind_param("ssssss", $name, $email, $phone, $subject, $budget, $message);

if (!$stmt->execute()) {
    http_response_code(500);
    echo json_encode(['error' => 'Database error. Your request could not be saved at this time.']);
    exit;
}

// 5. PHPMailer Inclusion (Unified with other scripts)
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
} else {
    require __DIR__ . '/PHPMailer/src/Exception.php';
    require __DIR__ . '/PHPMailer/src/PHPMailer.php';
    require __DIR__ . '/PHPMailer/src/SMTP.php';
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

// 6. Email sending
try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'qonkartechnologiespvtltd@gmail.com'; 
    $mail->Password   = 'lupzifxtcclmvwgr';          
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom($mail->Username, 'Qonkar Technologies');
    $mail->addReplyTo($mail->Username, 'Qonkar Technologies');

    // send to the submitter
    $mail->addAddress($email, $name);

    // also send copy to admin
    $adminEmail = 'devmuhammadarslan@gmail.com';
    $mail->addAddress($adminEmail, 'Qonkar Technologies');

    $mail->Subject = "Thank you for contacting Qonkar Technologies";
    $mail->isHTML(true);

    $mail->Body = "
    <div style='font-family: Arial, sans-serif; color: #333; line-height:1.6;'>
        <h2 style='color:#0d6efd;'>Thank you for contacting Qonkar Technologies</h2>
        <p>Hi <strong>{$name}</strong>,</p>
        <p>We have received your message and will get back to you shortly.  
        Here are the details you submitted:</p>
        
        <table style='width:100%; border-collapse: collapse;'>
            <tr>
                <td style='border:1px solid #ddd; padding:8px;'><strong>Full Name</strong></td>
                <td style='border:1px solid #ddd; padding:8px;'>{$name}</td>
            </tr>
            <tr>
                <td style='border:1px solid #ddd; padding:8px;'><strong>Email</strong></td>
                <td style='border:1px solid #ddd; padding:8px;'>{$email}</td>
            </tr>
            <tr>
                <td style='border:1px solid #ddd; padding:8px;'><strong>Phone</strong></td>
                <td style='border:1px solid #ddd; padding:8px;'>{$phone}</td>
            </tr>
            <tr>
                <td style='border:1px solid #ddd; padding:8px;'><strong>Subject</strong></td>
                <td style='border:1px solid #ddd; padding:8px;'>{$subject}</td>
            </tr>
            <tr>
                <td style='border:1px solid #ddd; padding:8px;'><strong>Budget</strong></td>
                <td style='border:1px solid #ddd; padding:8px;'>{$budget}</td>
            </tr>
            <tr>
                <td style='border:1px solid #ddd; padding:8px;'><strong>Message</strong></td>
                <td style='border:1px solid #ddd; padding:8px;'>{$message}</td>
            </tr>
        </table>

        <p style='margin-top:20px;'>We appreciate you reaching out to us.  
        Our team will review your request and respond as soon as possible.</p>

        <p style='margin-top:20px;'>
            Best regards,<br>
            <strong>Qonkar Technologies Team</strong>
        </p>
    </div>
";

    $mail->send();

    http_response_code(200);
    echo json_encode(['success' => true, 'message' => "Thank you, {$name}! Your message has been received."]);
    exit;
} catch (PHPMailerException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Message could not be sent.']);
    exit;
} catch (\Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'An internal server error occurred.']);
    exit;
}

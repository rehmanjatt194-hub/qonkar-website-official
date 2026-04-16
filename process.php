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
    $mail->Username   = 'Qonkar_mail'; 
    $mail->Password   = 'hdhc yfdc ntnf ukze';          
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Sender and Reply-To
    // Note: Gmail often requires the 'From' address to be the same as the authenticated user.
    // However, we will set Reply-To to the client's email so leadership can reply directly.
    $mail->setFrom('qonkartechnologiespvtltd@gmail.com', 'Qonkar Website Contact Form');
    $mail->addReplyTo($email, $name);

    // Recipients
    $mail->addAddress('mowaisrehmani@gmail.com', 'M. Owais Rehmani (CEO)');
    $mail->addCC('rehmanjatt194@gmail.com', 'HR');
    $mail->addCC('m.arslanarain786@gmail.com', 'COO');

    // Content
    $mail->isHTML(true);
    $mail->Subject = "Urgent: New Client Inquiry from $name";

    // Clean HTML Template
    $mail->Body = "
    <div style='font-family: \"Segoe UI\", Tahoma, Geneva, Verdana, sans-serif; max-width: 600px; margin: 0 auto; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; color: #333;'>
        <div style='background-color: #0d1117; padding: 20px; text-align: center; color: #ffffff;'>
            <h1 style='margin: 0; font-size: 24px;'>New Client Inquiry</h1>
            <p style='margin: 5px 0 0; opacity: 0.8;'>Qonkar Technologies Notification System</p>
        </div>
        <div style='padding: 30px; background-color: #ffffff;'>
            <p style='font-size: 16px; line-height: 1.5;'>You have received a new message from the contact form on your website. Details are as follows:</p>
            
            <table style='width: 100%; border-collapse: collapse; margin-top: 20px;'>
                <tr>
                    <td style='padding: 10px; border-bottom: 1px solid #f0f0f0; font-weight: bold; width: 30%;'>Client Name:</td>
                    <td style='padding: 10px; border-bottom: 1px solid #f0f0f0;'>{$name}</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border-bottom: 1px solid #f0f0f0; font-weight: bold;'>Email Address:</td>
                    <td style='padding: 10px; border-bottom: 1px solid #f0f0f0;'><a href='mailto:{$email}' style='color: #007bff; text-decoration: none;'>{$email}</a></td>
                </tr>
                <tr>
                    <td style='padding: 10px; border-bottom: 1px solid #f0f0f0; font-weight: bold;'>Phone Number:</td>
                    <td style='padding: 10px; border-bottom: 1px solid #f0f0f0;'>{$phone}</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border-bottom: 1px solid #f0f0f0; font-weight: bold;'>Subject:</td>
                    <td style='padding: 10px; border-bottom: 1px solid #f0f0f0;'>{$subject}</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border-bottom: 1px solid #f0f0f0; font-weight: bold;'>Project Budget:</td>
                    <td style='padding: 10px; border-bottom: 1px solid #f0f0f0;'>{$budget}</td>
                </tr>
            </table>

            <div style='margin-top: 30px; padding: 20px; background-color: #f9f9f9; border-left: 4px solid #0d1117;'>
                <h3 style='margin-top: 0; font-size: 18px;'>Client Message:</h3>
                <p style='font-style: italic; white-space: pre-wrap;'>{$message}</p>
            </div>

            <div style='margin-top: 30px; text-align: center;'>
                <a href='mailto:{$email}' style='display: inline-block; padding: 12px 25px; background-color: #007bff; color: #ffffff; text-decoration: none; border-radius: 5px; font-weight: bold;'>Reply Directly to Client</a>
            </div>
        </div>
        <div style='background-color: #f4f4f4; padding: 15px; text-align: center; font-size: 12px; color: #777;'>
            This is an automated notification from the Qonkar Technologies website.
        </div>
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

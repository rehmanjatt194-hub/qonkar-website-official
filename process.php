<?php
// DEBUG (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json; charset=utf-8');

// Use composer autoload if possible (recommended)
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
} else {
    // Fallback if you didn't use composer -- make sure these paths are correct
    require __DIR__ . '/PHPMailer/src/Exception.php';
    require __DIR__ . '/PHPMailer/src/PHPMailer.php';
    require __DIR__ . '/PHPMailer/src/SMTP.php';
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

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
    // $pdo = new PDO(
    //     "mysql:host=localhost;dbname=u870396814_qonkar;charset=utf8",
    //     "u870396814_qonkar",
    //     "01_Qonkar_tech"
    // ); // For Hostinger
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
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database error', 'detail' => $e->getMessage()]);
    exit;
}


    echo json_encode(['success' => true, 'message' => "Thank you, {$name}! Your message has been received."]);
    exit;

    /*
    // Email sending (Temporarily disabled)
    try {
        $mail = new PHPMailer(true);
        // ... (rest of the mailing code)
    } catch (PHPMailerException $e) {
        // ...
    }
    */

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

// Email sending
try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'rehmanjatt194@gmail.com';
    $mail->Password = 'bgtqzsutqprpskek';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL for Port 465
    $mail->Port = 465;
    $mail->Timeout = 60; // seconds
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    // Optional debug (comment out in production)
    $mail->SMTPDebug = 2;
    $debugLog = "";
    $mail->Debugoutput = function ($str, $level) use (&$debugLog) {
        $debugLog .= $str . "\n";
    };

    $mail->setFrom('rehmanjatt194@gmail.com', 'Qonkar Technologies');
    $mail->addReplyTo('rehmanjatt194@gmail.com', 'Qonkar Technologies');

    // send to the submitter
    $mail->addAddress($email, $name);

    // also send copy to admin
    $adminEmail = 'rehmanjatt194@gmail.com';
    $mail->addAddress($adminEmail, 'Qonkar Technologies Admin');

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
    echo json_encode(['success' => true, 'message' => "Thank you, {$name}! Your message has been received and we’ve sent a confirmation email."]);
    exit;
} catch (PHPMailerException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Mailer error', 'detail' => $mail->ErrorInfo, 'debug' => $debugLog]);
    exit;
} catch (\Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Server error', 'detail' => $e->getMessage(), 'debug' => $debugLog ?? '']);
    exit;
}

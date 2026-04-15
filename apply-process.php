<?php
require_once 'db-path.php'; // path relative to current file
require_once ADMIN_URL.'/database_config.php';

// Production Error Handling
ini_set('display_errors', 0);
error_reporting(0);

// Load PHPMailer classes
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Collect and Sanitize Data
    $name = $conn->real_escape_string($_POST['name'] ?? '');
    $email = $conn->real_escape_string($_POST['email'] ?? '');
    $phone_number = $conn->real_escape_string($_POST['phone_number'] ?? '');
    $country = $conn->real_escape_string($_POST['country'] ?? '');
    $city = $conn->real_escape_string($_POST['city'] ?? '');
    $job_id = intval($_POST['job_post'] ?? 0); 
    $portfolio_link = $conn->real_escape_string($_POST['portfolio_link'] ?? '');
    $linkedin = $conn->real_escape_string($_POST['linkedin'] ?? '');
    $message_text = $conn->real_escape_string($_POST['message'] ?? '');

    // 2. Validation
    if ($job_id <= 0) {
        echo "<script>alert('❌ Please select a job position.'); window.history.back();</script>";
        exit;
    }

    // 3. Resume Upload Logic
    $resumePath = '';
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
        $ext = strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION));
        $allowed = ['pdf', 'doc', 'docx'];
        if (!in_array($ext, $allowed)) {
            echo "<script>alert('❌ Invalid file type. PDF, DOC, and DOCX only.'); window.history.back();</script>";
            exit;
        }
        $resumeDir = 'uploads/resumes/';
        if (!is_dir($resumeDir)) mkdir($resumeDir, 0777, true);
        $resumePath = $resumeDir . uniqid('resume_') . '.' . $ext;
        move_uploaded_file($_FILES['resume']['tmp_name'], $resumePath);
    } else {
        echo "<script>alert('❌ Resume is required.'); window.history.back();</script>";
        exit;
    }

    // 4. Database Insert
    $stmt = $conn->prepare("
        INSERT INTO job_applications 
        (name, email, phone_number, country, city, job_id, resume, portfolio_link, linkedin, message) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    $stmt->bind_param("sssssissss", 
        $name, $email, $phone_number, $country, $city, 
        $job_id, $resumePath, $portfolio_link, $linkedin, $message_text
    );

    if ($stmt->execute()) {
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
            $mail->addAddress($email, $name);
            $mail->addAddress('devmuhammadarslan@gmail.com', 'Admin Notification');

            $mail->Subject = "Job Application Received: Qonkar Technologies";
            $mail->isHTML(true);
            $mail->Body = "<div style='font-family: Arial, sans-serif; color: #333;'>
                <h2 style='color:#067888;'>Application Received</h2>
                <p>Hi {$name}, thank you for applying. We have received your application and will review it soon.</p>
            </div>";
            $mail->send();
        } catch (Exception $e) { error_log("Mail Error: " . $e->getMessage()); }

        echo "<script>alert('✅ Application submitted successfully!'); window.location='apply-job.php';</script>";
    } else {
        error_log("Database Error: " . $stmt->error);
        echo "<script>alert('❌ A technical error occurred. Please try again later.'); window.history.back();</script>";
    }

    $stmt->close();
}
$conn->close();
?>
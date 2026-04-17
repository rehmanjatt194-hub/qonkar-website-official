<?php
require_once 'db-path.php';
require_once ADMIN_URL . '/database_config.php';

header('Content-Type: application/json; charset=utf-8');

// Production Error Handling
ini_set('display_errors', 0);
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. Collect and Sanitize Data
    $name           = $conn->real_escape_string($_POST['name'] ?? '');
    $email          = $conn->real_escape_string($_POST['email'] ?? '');
    $phone_number   = $conn->real_escape_string($_POST['phone_number'] ?? '');
    $country        = $conn->real_escape_string($_POST['country'] ?? '');
    $state          = $conn->real_escape_string($_POST['state'] ?? '');
    $city           = $conn->real_escape_string($_POST['city'] ?? '');
    
    // Combine state and city for storage if state is provided
    $display_city   = !empty($state) ? "$city, $state" : $city;

    $job_id         = intval($_POST['job_post'] ?? 0);
    $portfolio_link = $conn->real_escape_string($_POST['portfolio_link'] ?? '');
    $linkedin       = $conn->real_escape_string($_POST['linkedin'] ?? '');
    $message_text   = $conn->real_escape_string($_POST['message'] ?? '');

    // 2. Validation
    if ($job_id <= 0) {
        http_response_code(400);
        echo json_encode(['error' => 'Please select a job position.']);
        exit;
    }

    // 3. Resume Upload Logic
    $resumePath = '';
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
        $ext     = strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION));
        $allowed = ['pdf', 'doc', 'docx'];
        if (!in_array($ext, $allowed)) {
            http_response_code(400);
            echo json_encode(['error' => 'Invalid file type. PDF, DOC, and DOCX only.']);
            exit;
        }
        $resumeDir = 'uploads/resumes/';
        if (!is_dir($resumeDir)) mkdir($resumeDir, 0777, true);
        $resumePath = $resumeDir . uniqid('resume_') . '.' . $ext;
        move_uploaded_file($_FILES['resume']['tmp_name'], $resumePath);
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Resume is required.']);
        exit;
    }

    // 4. Database Insert
    $stmt = $conn->prepare("
        INSERT INTO job_applications
        (name, email, phone_number, country, city, job_id, resume, portfolio_link, linkedin, message)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    $stmt->bind_param("sssssissss",
        $name, $email, $phone_number, $country, $display_city,
        $job_id, $resumePath, $portfolio_link, $linkedin, $message_text
    );

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Application submitted successfully!']);
    } else {
        error_log("Database Error: " . $stmt->error);
        http_response_code(500);
        echo json_encode(['error' => 'A technical error occurred while saving your application.']);
    }

    $stmt->close();
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}

$conn->close();
?>
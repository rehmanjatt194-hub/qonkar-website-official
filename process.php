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


if ($stmt->execute()) {
    http_response_code(200);
    echo json_encode(['success' => true, 'message' => "Thank you, we have received your message."]);
    exit;
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Database error. Your request could not be saved at this time.']);
    exit;
}
?>

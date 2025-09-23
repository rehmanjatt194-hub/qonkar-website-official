<?php
require_once("admin/database_config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name = $conn->real_escape_string($_POST['name'] ?? '');
    $email = $conn->real_escape_string($_POST['email'] ?? '');
    $phone_number = $conn->real_escape_string($_POST['phone_number'] ?? '');
    $country = $conn->real_escape_string($_POST['country'] ?? '');
    $city = $conn->real_escape_string($_POST['city'] ?? '');
    $job_id = intval($_POST['job_post'] ?? 0);
    $portfolio_link = $conn->real_escape_string($_POST['portfolio_link'] ?? '');
    $linkedin = $conn->real_escape_string($_POST['linkedin'] ?? '');
    $message = $conn->real_escape_string($_POST['message'] ?? '');

    // Get job title from jobs table
    $jobTitleResult = $conn->query("SELECT job_title FROM jobs WHERE job_id=$job_id");
    if ($jobTitleResult->num_rows > 0) {
        $jobRow = $jobTitleResult->fetch_assoc();
        $job_title = $conn->real_escape_string($jobRow['job_title']);
    } else {
        $job_title = 'Unknown';
    }

    // Handle resume upload
    $resumeFile = $_FILES['resume'] ?? null;
    $resumePath = '';
    if ($resumeFile && $resumeFile['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($resumeFile['name'], PATHINFO_EXTENSION);
        $allowed = ['pdf', 'doc', 'docx'];
        if (!in_array(strtolower($ext), $allowed)) {
            die("❌ Invalid file type. Allowed: DOC, DOCX, PDF");
        }

        $uploadDir = 'uploads/resumes/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

        $newFileName = uniqid('resume_') . '.' . $ext;
        $resumePath = $uploadDir . $newFileName;

        if (!move_uploaded_file($resumeFile['tmp_name'], $resumePath)) {
            die("❌ Failed to upload resume.");
        }
    } else {
        die("❌ Resume is required.");
    }

    // Insert into job_applications table
    $stmt = $conn->prepare("INSERT INTO job_applications 
        (name, email, phone_number, country, city, job_title, resume, portfolio_link, linkedin, message) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "ssssssssss",
        $name,
        $email,
        $phone_number,
        $country,
        $city,
        $job_title,
        $resumePath,
        $portfolio_link,
        $linkedin,
        $message
    );

    if ($stmt->execute()) {
        echo "<script>alert('✅ Application submitted successfully!'); window.location='apply-job.php';</script>";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();

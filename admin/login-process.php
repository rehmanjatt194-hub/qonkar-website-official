<?php
require_once("database_config.php");
// Start output buffering to avoid header issues
session_start();
ob_start();

// Database configuration


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Prepare statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password

        if ($password == $user['password']) {
            if ($user['status'] === 'active') {
                echo $_SESSION['user_id'] = $user['id'];


                header("Location: dashboard.php");
                exit();
            } else {
                // Inactive account
                header("Location: index.php?error=Account inactive");
                exit();
            }
        } else {
            // Wrong password
            header("Location: index.php?error=Incorrect password");
            exit();
        }
    } else {
        // User not found
        header("Location: index.php?error=User not registered");
        exit();
    }

    $stmt->close();
}

$conn->close();
ob_end_flush();

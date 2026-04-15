<?php
// Secure Database Configuration
error_log("Database connection sequence initialized.");
$host = "localhost";
$dbname = "qonkarco_db";
$user = "qonkarco_user";
$pass = "db_user1122@";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    // Log error internally, show generic message to user
    error_log("DB Connection Error: " . $conn->connect_error);
    die("A technical error occurred. Please try again later.");
}
?>
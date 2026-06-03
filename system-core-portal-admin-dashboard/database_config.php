<?php
// Secure Database Configuration (Localhost)
error_log("Database connection sequence initialized.");

$host = "localhost";
$dbname = "qonkarco_db"; // phpMyAdmin mein yeh database bana hona chahiye
$user = "root";          // Localhost par default username 'root' hota hai
$pass = "";              // Localhost par default password khali (empty) hota hai

// PHP 8+ mein database errors ko sahi se handle karne ke liye
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

try {
    $conn = new mysqli($host, $user, $pass, $dbname);
    // Agar successfully connect ho jaye toh code aage chalta rahega
} catch (mysqli_sql_exception $e) {
    // Log error internally, show generic message to user
    error_log("DB Connection Error: " . $e->getMessage());
    die("A technical error occurred: Database connection failed. Please make sure MySQL is running in XAMPP.");
}
?>
<?php
require_once dirname(__DIR__) . '/db-path.php';
require_once dirname(__DIR__) . '/' . ADMIN_URL . '/database_config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE case_studies SET mockup_image = 'images/case-studies/craveeo_order_pic.webp' WHERE brand_name = 'Careevo'";
if ($conn->query($sql) === TRUE) {
    echo "Database updated successfully: Careevo mockup image changed to images/case-studies/craveeo_order_pic.webp\n";
} else {
    echo "Error updating database: " . $conn->error . "\n";
}

$conn->close();
?>

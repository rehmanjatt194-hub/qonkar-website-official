<?php
require_once dirname(__DIR__) . '/db-path.php';
require_once dirname(__DIR__) . '/' . ADMIN_URL . '/database_config.php';

// Fix Homalix
$conn->query("UPDATE case_studies SET mockup_image='images/case-studies/homalix_mockup.png' WHERE brand_name='Homalix'");
// Fix Schoolian
$conn->query("UPDATE case_studies SET mockup_image='images/case-studies/schoolian_dashboard.png' WHERE brand_name='Schoolian'");
// Fix Careevo
$conn->query("UPDATE case_studies SET mockup_image='images/case-studies/craveeo_order_pic.webp' WHERE brand_name='Careevo'");

// Insert Sellvixa if not exists
$checkSellvixa = $conn->query("SELECT id FROM case_studies WHERE brand_name = 'Sellvixa'");
if ($checkSellvixa->num_rows == 0) {
    $stmt = $conn->prepare("INSERT INTO case_studies (mockup_image, background_image, brand_name, short_description, status, link_of_case_study) VALUES (?, ?, ?, ?, ?, ?)");
    $mockup = "images/case-studies/sellvixa_dashboard.png";
    $bg = ""; 
    $brand = "Sellvixa";
    $desc = "A next-generation Retail ERP and POS System featuring live checkouts, multi-branch control, and visual analytics.";
    $status = "active";
    $link = "/case-studies/sellvixa";
    
    $stmt->bind_param("ssssss", $mockup, $bg, $brand, $desc, $status, $link);
    $stmt->execute();
    $sellvixaId = $conn->insert_id;
    $conn->query("INSERT INTO case_study_category_bridge (case_study_id, category_id) VALUES ($sellvixaId, 2)");
} else {
    $conn->query("UPDATE case_studies SET mockup_image='images/case-studies/sellvixa_dashboard.png' WHERE brand_name='Sellvixa'");
}

echo "Database fixed!\n";
?>

<?php
// scratch/insert_cases.php
require_once dirname(__DIR__) . '/db-path.php';
require_once dirname(__DIR__) . '/' . ADMIN_URL . '/database_config.php';

echo "Database connection successful.\n";

// 1. Check if Homalix already exists
$checkHomalix = $conn->query("SELECT id FROM case_studies WHERE brand_name = 'Homalix'");
if ($checkHomalix->num_rows == 0) {
    echo "Inserting Homalix...\n";
    $stmt = $conn->prepare("INSERT INTO case_studies (mockup_image, background_image, brand_name, short_description, status, link_of_case_study) VALUES (?, ?, ?, ?, ?, ?)");
    $mockup = "images/case-studies/homalix_mockup.png";
    $bg = "images/case-studies/background/homalix_bg.png";
    $brand = "Homalix";
    $desc = "A unified, secure, and highly scalable Hospital Management System centralizing electronic medical records, patient flow triage, and diagnostics across healthcare networks.";
    $status = "active";
    $link = "/case-studies/homalix";
    
    $stmt->bind_param("ssssss", $mockup, $bg, $brand, $desc, $status, $link);
    if ($stmt->execute()) {
        $homalixId = $conn->insert_id;
        echo "Homalix inserted with ID: $homalixId\n";
        
        // Link to Category 2 (Software Development)
        $conn->query("INSERT INTO case_study_category_bridge (case_study_id, category_id) VALUES ($homalixId, 2)");
        echo "Homalix linked to Software Development category.\n";
    } else {
        echo "Error inserting Homalix: " . $stmt->error . "\n";
    }
} else {
    echo "Homalix already exists.\n";
}

// 2. Check if Schoolian already exists
$checkSchoolian = $conn->query("SELECT id FROM case_studies WHERE brand_name = 'Schoolian'");
if ($checkSchoolian->num_rows == 0) {
    echo "Inserting Schoolian...\n";
    $stmt = $conn->prepare("INSERT INTO case_studies (mockup_image, background_image, brand_name, short_description, status, link_of_case_study) VALUES (?, ?, ?, ?, ?, ?)");
    $mockup = "images/case-studies/schoolian_dashboard.png";
    $bg = "images/case-studies/schoolian_bg.png";
    $brand = "Schoolian";
    $desc = "A premium, multi-portal EdTech platform built to centralize school administration, streamline teacher registers, automate dynamic grading workflows, and simplify parent billing.";
    $status = "active";
    $link = "/case-studies/schoolian";
    
    $stmt->bind_param("ssssss", $mockup, $bg, $brand, $desc, $status, $link);
    if ($stmt->execute()) {
        $schoolianId = $conn->insert_id;
        echo "Schoolian inserted with ID: $schoolianId\n";
        
        // Link to Category 2 (Software Development)
        $conn->query("INSERT INTO case_study_category_bridge (case_study_id, category_id) VALUES ($schoolianId, 2)");
        echo "Schoolian linked to Software Development category.\n";
    } else {
        echo "Error inserting Schoolian: " . $stmt->error . "\n";
    }
} else {
    echo "Schoolian already exists.\n";
}
// 3. Check if Careevo already exists
$checkCareevo = $conn->query("SELECT id FROM case_studies WHERE brand_name = 'Careevo'");
if ($checkCareevo->num_rows == 0) {
    echo "Inserting Careevo...\n";
    $stmt = $conn->prepare("INSERT INTO case_studies (mockup_image, background_image, brand_name, short_description, status, link_of_case_study) VALUES (?, ?, ?, ?, ?, ?)");
    $mockup = "images/case-studies/craveeo_order_pic.webp";
    $bg = "images/case-studies/careevo_bg.png";
    $brand = "Careevo";
    $desc = "An intelligent, high-performance Restaurant Management OS linking table QR ordering, real-time kitchen queues, inventory control, and multi-outlet analytics.";
    $status = "active";
    $link = "/case-studies/careevo";
    
    $stmt->bind_param("ssssss", $mockup, $bg, $brand, $desc, $status, $link);
    if ($stmt->execute()) {
        $careevoId = $conn->insert_id;
        echo "Careevo inserted with ID: $careevoId\n";
        
        // Link to Category 2 (Software Development)
        $conn->query("INSERT INTO case_study_category_bridge (case_study_id, category_id) VALUES ($careevoId, 2)");
        echo "Careevo linked to Software Development category.\n";
    } else {
        echo "Error inserting Careevo: " . $stmt->error . "\n";
    }
} else {
    echo "Careevo already exists.\n";
}

$conn->close();
echo "Done!\n";
?>

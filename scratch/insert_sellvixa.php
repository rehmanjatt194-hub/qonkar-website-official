<?php
$conn = new mysqli('localhost', 'root', '', 'qonkarco_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if Sellvixa already exists
$check = $conn->query("SELECT id FROM case_studies WHERE brand_name LIKE '%Sellvixa%'");
if ($check->num_rows > 0) {
    echo "Sellvixa already exists in the case_studies table.\n";
} else {
    // Insert Sellvixa
    $stmt = $conn->prepare("INSERT INTO case_studies (mockup_image, background_image, brand_name, short_description, status, link_of_case_study) VALUES (?, ?, ?, ?, ?, ?)");
    $mockup = 'images/case-studies/sellvixa_dashboard.png';
    $bg = 'images/case-studies/background/sellvixa_bg.png';
    $brand = 'Sellvixa Retail Management System & POS';
    $desc = 'Sellvixa is a next-generation Retail ERP and POS System designed to consolidate fragmented cash points, branch inventory, and bookkeeping errors into a single, cohesive dashboard ecosystem.';
    $status = 'active';
    $link = '/case-studies/sellvixa';
    
    $stmt->bind_param("ssssss", $mockup, $bg, $brand, $desc, $status, $link);
    if ($stmt->execute()) {
        $new_id = $conn->insert_id;
        echo "Successfully inserted Sellvixa into case_studies with ID: " . $new_id . "\n";
        
        // Insert into bridge table for Category 2 (Software Development)
        $stmt_bridge = $conn->prepare("INSERT INTO case_study_category_bridge (case_study_id, category_id) VALUES (?, ?)");
        $cat_id = 2; // Software Development
        $stmt_bridge->bind_param("ii", $new_id, $cat_id);
        if ($stmt_bridge->execute()) {
            echo "Successfully linked Sellvixa (ID: $new_id) to Category 2 (Software Development)\n";
        } else {
            echo "Failed to link category bridge: " . $conn->error . "\n";
        }
    } else {
        echo "Failed to insert Sellvixa: " . $conn->error . "\n";
    }
}
?>

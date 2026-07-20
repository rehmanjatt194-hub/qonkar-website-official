<?php
// handlers/import_new_case_studies.php - Data Migration Helper
require_once dirname(__DIR__) . '/config/db-path.php';
require_once ADMIN_PATH . '/database_config.php';

echo "<h2>Qonkar Technologies - Case Studies Database Setup</h2>";
echo "<p>Database connection established successfully.</p>";

$cases = [
    [
        'brand' => 'Homalix Hospital Management System',
        'mockup' => 'images/case-studies/homalix_mockup.png',
        'bg' => 'images/case-studies/background/homalix_bg.png',
        'desc' => 'A unified, secure, and highly scalable Hospital Management System centralizing electronic medical records, patient flow triage, and diagnostics across healthcare networks.',
        'link' => '/case-studies/homalix',
        'cat_id' => 2
    ],
    [
        'brand' => 'Schoolian School Management System',
        'mockup' => 'images/case-studies/schoolian_dashboard.png',
        'bg' => 'images/case-studies/schoolian_bg.png',
        'desc' => 'A premium, multi-portal EdTech platform built to centralize school administration, streamline teacher registers, automate dynamic grading workflows, and simplify parent billing.',
        'link' => '/case-studies/schoolian.php',
        'cat_id' => 2
    ],
    [
        'brand' => 'Sellvixa Retail Management System & POS',
        'mockup' => 'images/case-studies/sellvixa_dashboard.png',
        'bg' => 'images/case-studies/background/sellvixa_bg.png',
        'desc' => 'A futuristic Point of Sale (POS) and Multi-Branch Retail Management ERP system, consolidating inventory tracking, automated billing, and live checkout analytics.',
        'link' => '/case-studies/sellvixa',
        'cat_id' => 2
    ],
    [
        'brand' => 'Careevo',
        'mockup' => 'images/case-studies/craveeo_order_pic.webp',
        'bg' => 'images/case-studies/careevo_bg.png',
        'desc' => 'An intelligent, high-performance Restaurant Management OS linking table QR ordering, real-time kitchen queues, inventory control, and multi-outlet analytics.',
        'link' => '/case-studies/careevo',
        'cat_id' => 2
    ]
];

foreach ($cases as $case) {
    $stmt = $conn->prepare("SELECT id FROM case_studies WHERE brand_name = ? OR link_of_case_study = ?");
    $stmt->bind_param("ss", $case['brand'], $case['link']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo "<p style='color:blue;'>Inserting {$case['brand']}...</p>";
        $insert = $conn->prepare("INSERT INTO case_studies (mockup_image, background_image, brand_name, short_description, status, link_of_case_study) VALUES (?, ?, ?, ?, 'active', ?)");
        $insert->bind_param("sssss", $case['mockup'], $case['bg'], $case['brand'], $case['desc'], $case['link']);
        
        if ($insert->execute()) {
            $newId = $conn->insert_id;
            echo "<p style='color:green;'>✓ Successfully inserted {$case['brand']} with ID: $newId</p>";
            
            $conn->query("INSERT IGNORE INTO case_study_category_bridge (case_study_id, category_id) VALUES ($newId, {$case['cat_id']})");
            echo "<p style='color:green;'>✓ Linked {$case['brand']} to Category ID: {$case['cat_id']}</p>";
        } else {
            echo "<p style='color:red;'>✗ Error inserting {$case['brand']}: {$insert->error}</p>";
        }
        $insert->close();
    } else {
        $row = $result->fetch_assoc();
        echo "<p style='color:orange;'>ℹ {$case['brand']} already exists in database (ID: {$row['id']}). Skipping insertion.</p>";
    }
    $stmt->close();
}

echo "<h3>All operations completed successfully!</h3>";
?>

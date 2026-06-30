<?php
// Enable strict error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h2>Qonkar Live Server Debugging Tool</h2>";

// 1. Check PHP Version
echo "<b>PHP Version:</b> " . phpversion() . "<br><hr>";

// 2. Check Database Connection
echo "<h3>1. Database Connection Check</h3>";
$configPath = __DIR__ . '/system-core-portal-admin-dashboard/database_config.php';
if (file_exists($configPath)) {
    require_once $configPath;
    if (isset($conn) && $conn instanceof mysqli) {
        if ($conn->connect_error) {
            echo "<span style='color:red;'>Connection Failed: " . $conn->connect_error . "</span><br>";
        } else {
            echo "<span style='color:green;'>Database Connected Successfully!</span><br>";
            echo "Connected to Database: <b>" . $conn->query("SELECT DATABASE()")->fetch_row()[0] . "</b><br>";
        }
    } else {
        echo "<span style='color:red;'>Database variable \$conn not found or invalid.</span><br>";
    }
} else {
    echo "<span style='color:red;'>Database config file not found at: $configPath</span><br>";
}
echo "<hr>";

// 3. Check Case Studies Table & Data
echo "<h3>2. Database Tables Check (Case Studies)</h3>";
if (isset($conn) && !$conn->connect_error) {
    // Check case_studies
    $result = $conn->query("SELECT COUNT(*) as count FROM case_studies");
    if ($result) {
        $row = $result->fetch_assoc();
        echo "<b>case_studies</b> table exists. Total records: " . $row['count'] . "<br>";
    } else {
        echo "<span style='color:red;'>Error reading case_studies: " . $conn->error . "</span><br>";
    }

    // Check case_study_category_bridge
    $result2 = $conn->query("SELECT COUNT(*) as count FROM case_study_category_bridge");
    if ($result2) {
        $row2 = $result2->fetch_assoc();
        echo "<b>case_study_category_bridge</b> table exists. Total records: " . $row2['count'] . "<br>";
    } else {
        echo "<span style='color:red;'>Error reading case_study_category_bridge: " . $conn->error . "</span><br>";
    }

    // Check case_study_categories
    $result3 = $conn->query("SELECT COUNT(*) as count FROM case_study_categories");
    if ($result3) {
        $row3 = $result3->fetch_assoc();
        echo "<b>case_study_categories</b> table exists. Total records: " . $row3['count'] . "<br>";
    } else {
        echo "<span style='color:red;'>Error reading case_study_categories: " . $conn->error . "</span><br>";
    }

    // Check the latest case studies query (like in portfolio.php)
    echo "<h4>Testing Portfolio Query:</h4>";
    $sql = "SELECT cs.id, cs.brand_name, csc.category_name 
            FROM case_studies cs
            LEFT JOIN case_study_category_bridge bridge ON cs.id = bridge.case_study_id
            LEFT JOIN case_study_categories csc ON bridge.category_id = csc.id
            WHERE cs.status = 'active'
            ORDER BY cs.created_at DESC LIMIT 5";
    $qResult = $conn->query($sql);
    if ($qResult) {
        echo "<table border='1' cellpadding='5' style='border-collapse:collapse;'>";
        echo "<tr><th>ID</th><th>Brand Name</th><th>Category</th></tr>";
        while($r = $qResult->fetch_assoc()){
            echo "<tr><td>{$r['id']}</td><td>{$r['brand_name']}</td><td>" . ($r['category_name'] ?? "<span style='color:red;'>NULL (Missing Category!)</span>") . "</td></tr>";
        }
        echo "</table>";
    } else {
         echo "<span style='color:red;'>Portfolio Query Failed: " . $conn->error . "</span><br>";
    }
}
echo "<hr>";

// 4. Check File & Image Existence
echo "<h3>3. File System & Image Checks</h3>";
$imagesToCheck = [
    'images/case-studies/homalix_mockup.png',
    'images/case-studies/schoolian_dashboard.png',
    'images/case-studies/sellvixa_dashboard.png',
    'images/case-studies/craveeo_order_pic.webp'
];

foreach ($imagesToCheck as $img) {
    $path = __DIR__ . '/' . $img;
    if (file_exists($path)) {
        echo "Image <b style='color:green;'>Exists</b>: $img<br>";
    } else {
        echo "Image <b style='color:red;'>Missing</b>: $img <small>(Looked at: $path)</small><br>";
    }
}
echo "<hr>";

echo "<h3>End of Debugging</h3>";
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Qonkar Comprehensive Live Server Diagnostic Tool</h1>";

// --- 1. System & Environment ---
echo "<h2>1. System Environment</h2>";
echo "<b>PHP Version:</b> " . phpversion() . "<br>";
echo "<b>Server Software:</b> " . ($_SERVER['SERVER_SOFTWARE'] ?? 'Unknown') . "<br>";
echo "<b>Document Root:</b> " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "<b>Script Path:</b> " . __DIR__ . "<br><hr>";

// --- 2. Database Connection ---
echo "<h2>2. Database Diagnostics</h2>";
$configPath = __DIR__ . '/system-core-portal-admin-dashboard/database_config.php';
$dbConnected = false;
if (file_exists($configPath)) {
    require_once $configPath;
    if (isset($conn) && $conn instanceof mysqli) {
        if ($conn->connect_error) {
            echo "<span style='color:red;'>Connection Failed: " . $conn->connect_error . "</span><br>";
        } else {
            echo "<span style='color:green;'>Database Connected Successfully!</span><br>";
            echo "Connected to Database: <b>" . $conn->query("SELECT DATABASE()")->fetch_row()[0] . "</b><br>";
            $dbConnected = true;
        }
    } else {
        echo "<span style='color:red;'>Database variable \$conn not found or invalid.</span><br>";
    }
} else {
    echo "<span style='color:red;'>Database config file not found at: $configPath</span><br>";
}

// --- 3. Database Tables Check ---
if ($dbConnected) {
    echo "<h3>Tables Status</h3>";
    $tablesToCheck = [
        'case_studies', 'case_study_categories', 'case_study_category_bridge',
        'blogs', 'blogs_category', 'blog_category_map',
        'jobs', 'job_applications',
        'messages', 'users'
    ];
    
    echo "<table border='1' cellpadding='5' style='border-collapse:collapse; width:50%;'>";
    echo "<tr><th style='text-align:left;'>Table Name</th><th>Status</th><th>Record Count</th></tr>";
    
    foreach ($tablesToCheck as $tbl) {
        $res = $conn->query("SELECT COUNT(*) as c FROM `$tbl`");
        if ($res) {
            $count = $res->fetch_assoc()['c'];
            echo "<tr><td>$tbl</td><td style='color:green;'>Exists</td><td style='text-align:center;'>$count</td></tr>";
        } else {
            echo "<tr><td>$tbl</td><td style='color:red;'>Missing / Error</td><td>" . $conn->error . "</td></tr>";
        }
    }
    echo "</table>";
}
echo "<hr>";

// --- 4. Directory & Permissions ---
echo "<h2>3. Directories & Permissions</h2>";
$directories = ['images', 'css', 'js', 'fonts', 'system-core-portal-admin-dashboard'];

foreach ($directories as $dir) {
    $path = __DIR__ . '/' . $dir;
    if (is_dir($path)) {
        $perms = substr(sprintf('%o', fileperms($path)), -4);
        echo "Directory <b>$dir</b>: <span style='color:green;'>Exists</span> (Permissions: $perms)<br>";
    } else {
        echo "Directory <b>$dir</b>: <span style='color:red;'>Missing</span><br>";
    }
}
echo "<hr>";

// --- 5. Critical Files ---
echo "<h2>4. Critical Files</h2>";
$criticalFiles = [
    'index.php',
    'portfolio.php',
    'db-path.php',
    'images/orange_map_clean.png',
    'images/qonkar_robot_guide.webp'
];

foreach ($criticalFiles as $file) {
    $path = __DIR__ . '/' . $file;
    if (file_exists($path)) {
        echo "File <b>$file</b>: <span style='color:green;'>Exists</span><br>";
    } else {
        echo "File <b>$file</b>: <span style='color:red;'>Missing</span><br>";
    }
}
echo "<hr>";

// --- 6. PHP Error Logs ---
echo "<h2>5. Recent PHP Error Logs</h2>";
$logFile = ini_get('error_log');
if ($logFile && file_exists($logFile)) {
    echo "Log file found: <b>$logFile</b><br>";
    $logs = shell_exec("tail -n 15 " . escapeshellarg($logFile));
    if ($logs) {
        echo "<pre style='background:#f4f4f4; padding:10px; border:1px solid #ddd; overflow:auto; max-height:200px;'>" . htmlspecialchars($logs) . "</pre>";
    } else {
        echo "Could not read log file or it's empty.<br>";
    }
} else {
    // Check common cPanel location
    $cpanelLog = __DIR__ . '/error_log';
    if (file_exists($cpanelLog)) {
        echo "cPanel error_log found in root folder.<br>";
        $lines = array_slice(file($cpanelLog), -15);
        echo "<pre style='background:#f4f4f4; padding:10px; border:1px solid #ddd; overflow:auto; max-height:200px;'>" . htmlspecialchars(implode("", $lines)) . "</pre>";
    } else {
        echo "No error_log file found in the root directory.<br>";
    }
}
echo "<hr>";

echo "<h3>Diagnostic Complete</h3>";
?>

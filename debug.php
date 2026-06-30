<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// ── helpers ──────────────────────────────────────────────────────────────
function ok($msg)  { echo "<tr><td>$msg</td><td style='color:green;font-weight:bold;'>✅ OK</td><td>—</td></tr>"; }
function fail($msg,$detail='') { echo "<tr><td>$msg</td><td style='color:red;font-weight:bold;'>❌ FAIL</td><td style='color:#c00;'>$detail</td></tr>"; }
function warn($msg,$detail='') { echo "<tr><td>$msg</td><td style='color:orange;font-weight:bold;'>⚠️ WARN</td><td>$detail</td></tr>"; }

function tbl_start($title) {
    echo "<h3 style='margin-top:24px;border-left:4px solid #f80;padding-left:8px;'>$title</h3>";
    echo "<table border='1' cellpadding='6' cellspacing='0' style='border-collapse:collapse;width:100%;font-size:13px;'>";
    echo "<tr style='background:#222;color:#fff;'><th style='text-align:left;width:40%'>Check</th><th style='width:10%'>Status</th><th style='text-align:left;'>Detail</th></tr>";
}
function tbl_end() { echo "</table>"; }

function file_ok($label, $rel) {
    global $ROOT;
    $full = $ROOT.'/'.$rel;
    if (file_exists($full)) ok("$label – $rel");
    else fail("$label – $rel", "File missing on server");
}

$ROOT = dirname(__FILE__);
$conn = null;
$dbOk = false;

// ─────────────────────────────────────────────────────────────────────────
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Qonkar – Full Site Diagnostic</title>
<style>
 body{font-family:Arial,sans-serif;background:#f5f5f5;padding:20px;color:#333;}
 h1{background:#111;color:#ff8c00;padding:14px 20px;border-radius:6px;}
 h2{background:#333;color:#fff;padding:8px 14px;border-radius:4px;margin-top:30px;}
 h3{color:#333;}
 table{background:#fff;box-shadow:0 1px 4px rgba(0,0,0,.15);border-radius:4px;margin-bottom:8px;}
 tr:nth-child(even){background:#f9f9f9;}
 a{color:#0a66c2;}
 .summary{display:flex;gap:20px;flex-wrap:wrap;margin:20px 0;}
 .summary-box{background:#fff;border-radius:6px;padding:16px 24px;box-shadow:0 1px 4px rgba(0,0,0,.12);text-align:center;min-width:120px;}
 .summary-box span{display:block;font-size:28px;font-weight:bold;}
 .pass{color:green;} .err{color:red;} .wrn{color:orange;}
</style>
</head>
<body>

<h1>🔍 Qonkar – Full Site Diagnostic</h1>
<p>Generated: <b><?= date('Y-m-d H:i:s') ?></b> &nbsp;|&nbsp; PHP: <b><?= phpversion() ?></b> &nbsp;|&nbsp; Server: <b><?= $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown' ?></b></p>

<?php
// ─────────────────────────────────────────────────────────────────────────
// SECTION A – SYSTEM
// ─────────────────────────────────────────────────────────────────────────
echo "<h2>A. System Environment</h2>";
tbl_start("Server Info");

$exts = ['mysqli','mbstring','json','curl','gd','fileinfo','openssl'];
foreach($exts as $e){
    if(extension_loaded($e)) ok("PHP Extension: $e");
    else fail("PHP Extension: $e", "Extension not loaded – may break functionality");
}

$uploadMax  = ini_get('upload_max_filesize');
$postMax    = ini_get('post_max_size');
$memLimit   = ini_get('memory_limit');
$maxExecTime= ini_get('max_execution_time');
ok("upload_max_filesize: $uploadMax");
ok("post_max_size: $postMax");
ok("memory_limit: $memLimit");
if((int)$maxExecTime < 30) warn("max_execution_time: $maxExecTime", "Consider increasing to 60+ seconds");
else ok("max_execution_time: $maxExecTime");

tbl_end();

// ─────────────────────────────────────────────────────────────────────────
// SECTION B – DATABASE
// ─────────────────────────────────────────────────────────────────────────
echo "<h2>B. Database</h2>";
tbl_start("Connection & Tables");

$configPath = $ROOT.'/system-core-portal-admin-dashboard/database_config.php';
if (!file_exists($configPath)) {
    fail("database_config.php", "File not found at: $configPath");
} else {
    require_once $configPath;
    if (isset($conn) && $conn instanceof mysqli && !$conn->connect_error) {
        $dbOk = true;
        $dbName = $conn->query("SELECT DATABASE()")->fetch_row()[0];
        ok("Database connection – connected to: $dbName");

        // Check all tables
        $tables = [
            'case_studies'               => 'Case Studies',
            'case_study_categories'      => 'Case Study Categories',
            'case_study_category_bridge' => 'Case Study Category Bridge',
            'blogs'                      => 'Blogs',
            'blogs_category'             => 'Blog Categories',
            'blog_category_map'          => 'Blog Category Map',
            'jobs'                       => 'Jobs',
            'job_applications'           => 'Job Applications',
            'messages'                   => 'Contact Messages',
            'users'                      => 'Admin Users',
        ];
        foreach ($tables as $tbl => $label) {
            $r = $conn->query("SELECT COUNT(*) as c FROM `$tbl`");
            if ($r) {
                $cnt = $r->fetch_assoc()['c'];
                if ($cnt == 0) warn("Table: $label ($tbl)", "Table exists but has 0 records");
                else ok("Table: $label ($tbl) – $cnt records");
            } else {
                fail("Table: $label ($tbl)", "Table missing or error: " . $conn->error);
            }
        }
    } else {
        fail("Database connection", isset($conn) ? $conn->connect_error : "conn not set");
    }
}

// Specific portfolio query test
if ($dbOk) {
    echo "<br>";
    tbl_start("Portfolio Page Query Test");
    $sql = "SELECT cs.id, cs.brand_name, cs.mockup_image, cs.status,
                   GROUP_CONCAT(csc.category_name) AS cats
            FROM case_studies cs
            LEFT JOIN case_study_category_bridge b ON cs.id = b.case_study_id
            LEFT JOIN case_study_categories csc ON b.category_id = csc.id
            WHERE cs.status='active'
            GROUP BY cs.id ORDER BY cs.created_at DESC";
    $r = $conn->query($sql);
    if (!$r) {
        fail("Portfolio query", $conn->error);
    } else {
        ok("Portfolio query ran – " . $r->num_rows . " active case studies returned");
        while ($row = $r->fetch_assoc()) {
            $imgPath = $ROOT.'/'.$row['mockup_image'];
            $imgExists = file_exists($imgPath);
            $cat = $row['cats'] ?? 'NULL';
            if (!$imgExists)
                fail("Case Study [{$row['id']}] {$row['brand_name']}", "Image missing: {$row['mockup_image']}");
            elseif ($cat === 'NULL')
                warn("Case Study [{$row['id']}] {$row['brand_name']}", "No category linked in bridge table");
            else
                ok("Case Study [{$row['id']}] {$row['brand_name']} | cat: $cat | image: ✅");
        }
    }
    tbl_end();

    // Blogs query test
    tbl_start("Blogs Page Query Test");
    $r2 = $conn->query("SELECT id, blog_title, blog_image, status FROM blogs ORDER BY created_at DESC LIMIT 10");
    if (!$r2) {
        fail("Blogs query", $conn->error);
    } else {
        ok("Blogs query ran – " . $r2->num_rows . " blogs returned");
        while ($row = $r2->fetch_assoc()) {
            $imgPath = $ROOT.'/'.$row['blog_image'];
            $imgExists = !empty($row['blog_image']) && file_exists($imgPath);
            if (!$imgExists)
                warn("Blog [{$row['id']}] {$row['blog_title']}", "Image missing or empty: {$row['blog_image']}");
            else
                ok("Blog [{$row['id']}] {$row['blog_title']} – image ✅");
        }
    }
    tbl_end();

    // Jobs query test
    tbl_start("Career Page Query Test");
    $r3 = $conn->query("SELECT job_id, job_title, job_status FROM jobs ORDER BY created_at DESC LIMIT 10");
    if (!$r3) {
        fail("Jobs query", $conn->error);
    } else {
        ok("Jobs query ran – " . $r3->num_rows . " jobs returned");
        while ($row = $r3->fetch_assoc()) {
            ok("Job [{$row['job_id']}] {$row['job_title']} – status: {$row['job_status']}");
        }
    }
    tbl_end();
}

// ─────────────────────────────────────────────────────────────────────────
// SECTION C – ALL PAGES FILE CHECK
// ─────────────────────────────────────────────────────────────────────────
echo "<h2>C. All Pages – File Existence</h2>";
tbl_start("Main Pages");
$pages = [
    'Home'            => 'index.php',
    'Portfolio'       => 'portfolio.php',
    'Blogs'           => 'blogs.php',
    'Blog Details'    => 'blog-details.php',
    'Career'          => 'career.php',
    'Apply Job'       => 'apply-job.php',
    'Contact Us'      => 'contact-us.php',
    'About Us'        => 'about-us.php',
    'Help & Support'  => 'help-and-support.php',
    'Privacy Policy'  => 'privacy-policy.php',
    'Terms of Service'=> 'terms-of-service.php',
    '404 Page'        => '404.php',
    'Sitemap'         => 'sitemap.php',
    'Router'          => 'router.php',
    'DB Path'         => 'db-path.php',
];
foreach ($pages as $label => $file) file_ok($label, $file);
tbl_end();

tbl_start("Case Study Pages");
$csPages = [
    'Case Study – Homalix'   => 'case-studies/homalix.php',
    'Case Study – Schoolian' => 'case-studies/schoolian.php',
    'Case Study – Careevo'   => 'case-studies/careevo.php',
    'Case Study – Sellvixa'  => 'case-studies/sellvixa.php',
];
foreach ($csPages as $label => $file) file_ok($label, $file);
tbl_end();

tbl_start("Service Pages");
$servicePages = [
    'Web Design & Dev'       => 'services/web-design-and-development.php',
    'Shopify Development'    => 'services/shopify-development.php',
    'Shopify Store Setup'    => 'services/shopify-store-setup.php',
    'Shopify Theme Design'   => 'services/shopify-theme-design.php',
    'SaaS Product Dev'       => 'services/saas-product-development.php',
    'Landing Pages Design'   => 'services/landing-pages-design.php',
    'Healthcare & HIPPA Apps'=> 'services/healthcare-and-hippa-apps.php',
    'Automotive App'         => 'services/automative-app.php',
    'Speed Optimization'     => 'services/speed-optimization.php',
    'Migration Services'     => 'services/migration-services.php',
];
foreach ($servicePages as $label => $file) file_ok($label, $file);
tbl_end();

// ─────────────────────────────────────────────────────────────────────────
// SECTION D – CRITICAL IMAGES
// ─────────────────────────────────────────────────────────────────────────
echo "<h2>D. Critical Images & Assets</h2>";
tbl_start("Key Images");
$images = [
    'Map image (Home)'               => 'images/orange_map_clean.png',
    'Robot Guide image (Home)'       => 'images/qonkar_robot_guide.webp',
    'Homalix Mockup'                 => 'images/case-studies/homalix_mockup.png',
    'Homalix Background'             => 'images/case-studies/background/homalix_bg.webp',
    'Schoolian Mockup'               => 'images/case-studies/schoolian_dashboard.png',
    'Schoolian Background'           => 'images/case-studies/schoolian_bg.webp',
    'Careevo Mockup'                 => 'images/case-studies/craveeo_order_pic.webp',
    'Careevo Background'             => 'images/case-studies/careevo_bg.webp',
    'Sellvixa Mockup'                => 'images/case-studies/sellvixa_dashboard.png',
    'ERP Software Mockup'            => 'images/case-studies/ERP_Software.webp',
    'CRM Mockup'                     => 'images/case-studies/CRM_MOCKUP.webp',
    'CMS Mockup'                     => 'images/case-studies/CMS.webp',
    'SAAS Mockup'                    => 'images/case-studies/SAAS.webp',
    'Quest Mockup'                   => 'images/case-studies/QUEST_Mockup.webp',
    'CSS – main style'               => 'css/style.css',
    'CSS – portfolio'                => 'css/portfolio.css',
];
foreach ($images as $label => $rel) {
    $full = $ROOT.'/'.$rel;
    if (file_exists($full)) ok("$label – $rel");
    else fail("$label – $rel", "Missing on server!");
}
tbl_end();

// ─────────────────────────────────────────────────────────────────────────
// SECTION E – PROCESS FILES & FORMS
// ─────────────────────────────────────────────────────────────────────────
echo "<h2>E. Form Process Files</h2>";
tbl_start("Process / Handler Files");
$procFiles = [
    'Contact Form Process'  => 'process.php',
    'Blog Section Process'  => 'blog_section_process.php',
    'Blog Details Process'  => 'blog-process.php',
    'Apply Job Process'     => 'apply-process.php',
    'PHPMailer Main Class'  => 'PHPMailer/src/PHPMailer.php',
    'PHPMailer SMTP'        => 'PHPMailer/src/SMTP.php',
    'PHPMailer Exception'   => 'PHPMailer/src/Exception.php',
];
foreach ($procFiles as $label => $file) file_ok($label, $file);
tbl_end();

// ─────────────────────────────────────────────────────────────────────────
// SECTION F – ERROR LOG
// ─────────────────────────────────────────────────────────────────────────
echo "<h2>F. PHP Error Log (Last 20 Errors)</h2>";
$logFile = $ROOT.'/error_log';
if (file_exists($logFile) && filesize($logFile) > 0) {
    $lines = array_slice(file($logFile), -20);
    echo "<pre style='background:#1a1a1a;color:#ff4444;padding:14px;border-radius:6px;overflow:auto;max-height:300px;font-size:12px;'>";
    echo htmlspecialchars(implode('', $lines));
    echo "</pre>";
    echo "<a href='?clear_log=1'>Clear error log</a>";
    if (isset($_GET['clear_log'])) { file_put_contents($logFile, ''); echo " <b>Log cleared!</b>"; }
} else {
    echo "<p style='color:green;'>✅ No error_log file found or it is empty – no PHP errors logged.</p>";
}

// ─────────────────────────────────────────────────────────────────────────
echo "<hr><p style='color:#999;font-size:12px;'>⚠️ Delete or password-protect debug.php after fixing issues. Never leave it public on a live server.</p>";
?>
</body>
</html>

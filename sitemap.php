<?php
// 1. Buffer Start (Faltu spaces rokne ke liye)
ob_start();

// 2. Error Reporting Off (XML clean rakhne ke liye)
error_reporting(0);
ini_set('display_errors', 0);

// 3. Database Include (✅ FIXED: Updated Path)
require_once("system-core-portal-admin-dashboard/database_config.php");

// 4. Buffer Clean
ob_clean(); 

// 5. Database Connection Check
if (isset($con)) { $conn = $con; }
if (!$conn) { die("Database connection failed"); }

// 6. Header Set
header("Content-Type: application/xml; charset=utf-8");

// 7. XML Output Start
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url><loc>https://qonkar.com/</loc><priority>1.0</priority><changefreq>daily</changefreq></url>
    <url><loc>https://qonkar.com/about-us</loc><priority>0.8</priority></url>
    <url><loc>https://qonkar.com/contact-us</loc><priority>0.8</priority></url>
    <url><loc>https://qonkar.com/blogs</loc><priority>0.9</priority></url>
    <url><loc>https://qonkar.com/career</loc><priority>0.8</priority></url>
    <url><loc>https://qonkar.com/portfolio</loc><priority>0.8</priority></url>
    
    <url><loc>https://qonkar.com/privacy-policy</loc><priority>0.5</priority></url>
    <url><loc>https://qonkar.com/terms-of-service</loc><priority>0.5</priority></url>
    <url><loc>https://qonkar.com/help-and-support</loc><priority>0.5</priority></url>

    <url><loc>https://qonkar.com/services/shopify</loc><priority>0.9</priority></url>
    <url><loc>https://qonkar.com/services/software-development</loc><priority>0.9</priority></url>
    <url><loc>https://qonkar.com/services/branding-and-digital-marketing</loc><priority>0.9</priority></url>

    <url><loc>https://qonkar.com/services/shopify-development</loc><priority>0.9</priority></url>
    <url><loc>https://qonkar.com/services/shopify-theme-design</loc><priority>0.9</priority></url>
    <url><loc>https://qonkar.com/services/shopify-store-setup</loc><priority>0.9</priority></url>
    <url><loc>https://qonkar.com/services/speed-optimization</loc><priority>0.9</priority></url>
    <url><loc>https://qonkar.com/services/migration-services</loc><priority>0.9</priority></url>

    <url><loc>https://qonkar.com/services/web-design-and-development</loc><priority>0.9</priority></url>
    <url><loc>https://qonkar.com/services/landing-pages-design</loc><priority>0.9</priority></url>
    <url><loc>https://qonkar.com/services/saas-product-development</loc><priority>0.9</priority></url>
    <url><loc>https://qonkar.com/services/automative-app</loc><priority>0.9</priority></url>
    <url><loc>https://qonkar.com/services/healthcare-and-hippa-apps</loc><priority>0.9</priority></url>
    
    <?php
    // --- Dynamic Blogs ---
    $sql_blogs = "SELECT slug, updated_at FROM blogs WHERE status = 'active' ORDER BY updated_at DESC";
    $result_blogs = mysqli_query($conn, $sql_blogs);
    
    if ($result_blogs) {
        while ($row = mysqli_fetch_assoc($result_blogs)) {
            $url = "https://qonkar.com/blog/" . htmlspecialchars($row['slug'], ENT_XML1, 'UTF-8');
            $date = date('c', strtotime($row['updated_at'])); 
            echo "<url><loc>$url</loc><lastmod>$date</lastmod><priority>0.8</priority></url>\n";
        }
    }

    // --- Dynamic Jobs ---
    $sql_jobs = "SELECT slug, created_at FROM jobs WHERE job_status = 'open' ORDER BY created_at DESC";
    $result_jobs = mysqli_query($conn, $sql_jobs);
    
    if ($result_jobs) {
        while ($row = mysqli_fetch_assoc($result_jobs)) {
            $url = "https://qonkar.com/apply/" . htmlspecialchars($row['slug'], ENT_XML1, 'UTF-8');
            $date = !empty($row['created_at']) ? date('c', strtotime($row['created_at'])) : date('c');
            echo "<url><loc>$url</loc><lastmod>$date</lastmod><priority>0.7</priority></url>\n";
        }
    }
    ?>

</urlset>
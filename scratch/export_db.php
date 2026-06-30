<?php
require_once dirname(__DIR__) . '/db-path.php';
require_once dirname(__DIR__) . '/' . ADMIN_URL . '/database_config.php';

$brands = ['Homalix', 'Schoolian', 'Careevo', 'Sellvixa'];
$inQuery = "'" . implode("','", $brands) . "'";

$query = "SELECT * FROM case_studies WHERE brand_name IN ($inQuery)";
$result = $conn->query($query);

echo "--- CASE STUDIES INSERT QUERIES ---\n\n";

while($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $mockup = $conn->real_escape_string($row['mockup_image']);
    $bg = $conn->real_escape_string($row['background_image']);
    $brand = $conn->real_escape_string($row['brand_name']);
    $desc = $conn->real_escape_string($row['short_description']);
    $status = $conn->real_escape_string($row['status']);
    $link = $conn->real_escape_string($row['link_of_case_study']);
    $created_at = $row['created_at'];
    $updated_at = $row['updated_at'];
    
    echo "INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ";
    echo "($id, '$mockup', '$bg', '$brand', '$desc', '$status', '$link', '$created_at', '$updated_at');\n";
    
    // Also get categories
    $catQuery = "SELECT * FROM case_study_category_bridge WHERE case_study_id = $id";
    $catRes = $conn->query($catQuery);
    while($cat = $catRes->fetch_assoc()) {
        $cid = $cat['category_id'];
        echo "INSERT INTO `case_study_category_bridge` (`case_study_id`, `category_id`) VALUES ($id, $cid);\n";
    }
    echo "\n";
}
?>

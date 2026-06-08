<?php
$conn = new mysqli('localhost', 'root', '', 'qonkarco_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$res = $conn->query("SELECT * FROM case_studies LIMIT 5");
while($row = $res->fetch_assoc()) {
    echo "ID: " . $row['id'] . "\n";
    echo "Brand: " . $row['brand_name'] . "\n";
    echo "Mockup: " . $row['mockup_image'] . "\n";
    echo "Background: " . $row['background_image'] . "\n";
    echo "Short Desc: " . $row['short_description'] . "\n";
    echo "Link: " . $row['link_of_case_study'] . "\n";
    echo "--------------------\n";
}
?>

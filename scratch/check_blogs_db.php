<?php
$conn = new mysqli('localhost', 'root', '', 'qonkarco_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "--- Blogs ---\n";
$res = $conn->query("SELECT * FROM blogs LIMIT 5");
if ($res) {
    while($row = $res->fetch_assoc()) {
        print_r($row);
    }
} else {
    echo "Error: " . $conn->error . "\n";
}

echo "--- Categories ---\n";
$res2 = $conn->query("SELECT * FROM blogs_category");
if ($res2) {
    while($row = $res2->fetch_assoc()) {
        print_r($row);
    }
} else {
    echo "Error: " . $conn->error . "\n";
}
?>

<?php
$conn = new mysqli('localhost', 'root', '', 'qonkarco_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$res = $conn->query("SELECT * FROM case_studies WHERE id IN (19, 20)");
while($row = $res->fetch_assoc()) {
    print_r($row);
}
?>

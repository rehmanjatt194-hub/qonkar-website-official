<?php
$conn = new mysqli('localhost', 'root', '', 'qonkarco_db');
$res = $conn->query('DESCRIBE blogs');
while($r = $res->fetch_assoc()) echo $r['Field'] . "\n";
?>

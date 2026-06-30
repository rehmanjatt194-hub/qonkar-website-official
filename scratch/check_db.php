<?php
$c = new mysqli('localhost', 'root', '', 'qonkarco_db');
$r = $c->query('SELECT brand_name, mockup_image FROM case_studies');
while($row = $r->fetch_assoc()){ echo $row['brand_name'] . ' -> ' . $row['mockup_image'] . "\n"; }
?>

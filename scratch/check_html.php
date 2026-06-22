<?php
$html = file_get_contents('http://localhost:8000/case-studies/sellvixa.php');
if ($html === false) {
    echo "Error: Could not fetch page.\n";
    exit(1);
}
$lines = explode("\n", $html);
foreach ($lines as $i => $line) {
    if (strpos($line, 'folded-tab') !== false) {
        echo ($i + 1) . ": " . trim($line) . "\n";
    }
}
?>

<?php
$paths = [
    'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/homalix_laptop_mockup_transparent.png',
    'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/homalix_phone_mockup_transparent.png'
];

foreach ($paths as $path) {
    if (!file_exists($path)) {
        echo "$path: NOT FOUND\n";
        continue;
    }
    echo "$path:\n";
    echo "  Size: " . filesize($path) . " bytes\n";
    echo "  MTime: " . date("Y-m-d H:i:s", filemtime($path)) . "\n";
    $info = getimagesize($path);
    echo "  Mime: " . $info['mime'] . " (" . $info[0] . "x" . $info[1] . ")\n";
}
?>

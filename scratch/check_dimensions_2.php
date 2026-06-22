<?php
$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/';

$files = [
    'images/case-studies/schoolian_mockup_laptop.png',
    'images/case-studies/schoolian_mockup_phone.png',
    'images/case-studies/schoolian_mockup_tablet.png',
    'images/laptop_mockup_dashboard.png'
];

foreach ($files as $file) {
    $path = $dir . $file;
    if (!file_exists($path)) {
        echo "$file does not exist\n";
        continue;
    }
    $info = getimagesize($path);
    echo "$file: Width={$info[0]}, Height={$info[1]}, Type={$info['mime']}\n";
}
?>

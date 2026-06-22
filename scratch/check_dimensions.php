<?php
$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/';

$files = [
    'images/career-benefits/homalix_dashboard_1780404861507.png',
    'images/case-studies/homalix_dashboard.png',
    'images/case-studies/homalix_mobile_mockup.png',
    'images/case-studies/homalix_mockup.png'
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

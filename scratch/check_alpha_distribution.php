<?php
$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/';

$images = [
    'laptop' => $dir . 'schoolian_mockup_laptop.png',
    'tablet' => $dir . 'schoolian_mockup_tablet.png'
];

foreach ($images as $name => $path) {
    $im = imagecreatefrompng($path);
    if (!$im) continue;
    
    $w = imagesx($im);
    $h = imagesy($im);
    
    $alpha_buckets = array_fill(0, 128, 0);
    
    for ($y = 0; $y < $h; $y++) {
        for ($x = 0; $x < $w; $x++) {
            $c = imagecolorat($im, $x, $y);
            $a = ($c >> 24) & 0x7F;
            $alpha_buckets[$a]++;
        }
    }
    
    echo "$name alpha distribution:\n";
    foreach ($alpha_buckets as $a => $count) {
        if ($count > 0) {
            // Group into ranges for readability
            echo "  Alpha $a: $count pixels\n";
        }
    }
    imagedestroy($im);
}
?>

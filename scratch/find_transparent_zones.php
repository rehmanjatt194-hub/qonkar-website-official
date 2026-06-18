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
    
    // Find the bounding box of all transparent pixels (alpha >= 64)
    $min_x = $w; $max_x = 0;
    $min_y = $h; $max_y = 0;
    
    for ($y = 0; $y < $h; $y++) {
        for ($x = 0; $x < $w; $x++) {
            $c = imagecolorat($im, $x, $y);
            $a = ($c >> 24) & 0x7F;
            if ($a >= 64) {
                if ($x < $min_x) $min_x = $x;
                if ($x > $max_x) $max_x = $x;
                if ($y < $min_y) $min_y = $y;
                if ($y > $max_y) $max_y = $y;
            }
        }
    }
    
    echo "$name transparent bounding box: X=[$min_x, $max_x], Y=[$min_y, $max_y]\n";
    imagedestroy($im);
}
?>

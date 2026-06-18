<?php
$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/';
$images = [
    'schoolian_mockup_laptop.png',
    'schoolian_mockup_phone.png',
    'schoolian_mockup_tablet.png'
];

foreach ($images as $img_name) {
    $path = $dir . $img_name;
    if (!file_exists($path)) {
        echo "$img_name: not found\n";
        continue;
    }
    
    $im = imagecreatefrompng($path);
    if (!$im) {
        echo "$img_name: failed to load\n";
        continue;
    }
    
    $w = imagesx($im);
    $h = imagesy($im);
    
    // Check the bottom row of pixels (y = h - 1)
    $bottom_opaque_count = 0;
    for ($x = 0; $x < $w; $x++) {
        $color = imagecolorat($im, $x, $h - 1);
        $alpha = ($color >> 24) & 0x7F;
        if ($alpha < 120) { // Mostly opaque
            $bottom_opaque_count++;
        }
    }
    
    echo "$img_name (size {$w}x{$h}): Bottom row has $bottom_opaque_count opaque pixels out of $w. " . 
         ($bottom_opaque_count > 0 ? "LIKELY CROPPED" : "Not cropped at bottom") . "\n";
         
    imagedestroy($im);
}
?>

<?php
ini_set('memory_limit', '512M');

$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/';

$devices = [
    'laptop' => $dir . 'schoolian_mockup_laptop.png',
    'tablet' => $dir . 'schoolian_mockup_tablet.png',
    'phone' => $dir . 'schoolian_mockup_phone.png'
];

foreach ($devices as $name => $path) {
    $im = imagecreatefrompng($path);
    if (!$im) continue;
    
    $w = imagesx($im);
    $h = imagesy($im);
    
    $solid = imagecreatetruecolor($w, $h);
    imagealphablending($solid, false);
    imagesavealpha($solid, true);
    
    // Fill with transparent
    $trans_c = imagecolorallocatealpha($solid, 0, 0, 0, 127);
    imagefill($solid, 0, 0, $trans_c);
    
    $opaque_c = imagecolorallocatealpha($solid, 0, 0, 0, 0);
    
    $filled_pixels = 0;
    
    for ($x = 0; $x < $w; $x++) {
        $min_y = -1;
        $max_y = -1;
        
        for ($y = 0; $y < $h; $y++) {
            $c = imagecolorat($im, $x, $y);
            $a = ($c >> 24) & 0x7F;
            if ($a < 64) { // Opaque
                if ($min_y == -1) {
                    $min_y = $y;
                }
                $max_y = $y;
            }
        }
        
        if ($min_y !== -1) {
            for ($y = $min_y; $y <= $max_y; $y++) {
                imagesetpixel($solid, $x, $y, $opaque_c);
                $filled_pixels++;
            }
        }
    }
    
    echo "$name column fill: Total pixels filled=$filled_pixels\n";
    
    // Save visual mask
    imagepng($solid, "C:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/scratch/solid_mask_{$name}.png");
    imagedestroy($im);
    imagedestroy($solid);
}
?>

<?php
$path = 'C:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/scratch/solid_mask_tablet.png';
$im = imagecreatefrompng($path);
if ($im) {
    $w = imagesx($im);
    $h = imagesy($im);
    
    // Check alpha of some pixels in the screen area (e.g. X = 200, Y = 300)
    $c = imagecolorat($im, 200, 300);
    $a = ($c >> 24) & 0x7F;
    echo "Solid tablet mask alpha at (200, 300): $a\n";
    
    // Count transparent pixels in the solid mask
    $trans = 0;
    for ($y = 0; $y < $h; $y++) {
        for ($x = 0; $x < $w; $x++) {
            $c = imagecolorat($im, $x, $y);
            $a = ($c >> 24) & 0x7F;
            if ($a >= 64) {
                $trans++;
            }
        }
    }
    echo "Solid tablet mask transparent pixels count: $trans out of " . ($w * $h) . "\n";
    
    imagedestroy($im);
} else {
    echo "Failed to load solid mask\n";
}
?>

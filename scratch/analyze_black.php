<?php
$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/';
$path = $dir . 'schoolian_devices_mockup.png';

$im = imagecreatefromjpeg($path);
if (!$im) {
    die("Failed to load image\n");
}

$w = imagesx($im);
$h = imagesy($im);

echo "Analyzing border pixels:\n";
// Print color of top-left 5x5 pixels
for ($y = 0; $y < 5; $y++) {
    for ($x = 0; $x < 5; $x++) {
        $c = imagecolorat($im, $x, $y);
        $r = ($c >> 16) & 0xFF;
        $g = ($c >> 8) & 0xFF;
        $b = $c & 0xFF;
        echo "Pixel ($x, $y): R=$r, G=$g, B=$b\n";
    }
}

imagedestroy($im);
?>

<?php
$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/';
$path = $dir . 'schoolian_devices_mockup_transparent.png';

$im = imagecreatefrompng($path);
if (!$im) {
    die("Failed to load output image\n");
}

$w = imagesx($im);
$h = imagesy($im);

// Bounding box for Laptop Screen:
// X from 400 to 800, Y from 220 to 520
$laptop_transparent_count = 0;
for ($y = 220; $y < 520; $y++) {
    for ($x = 400; $x < 800; $x++) {
        $c = imagecolorat($im, $x, $y);
        $a = ($c >> 24) & 0x7F;
        if ($a > 0) {
            $laptop_transparent_count++;
        }
    }
}

// Bounding box for Tablet Screen:
// X from 50 to 380, Y from 250 to 750
$tablet_transparent_count = 0;
for ($y = 250; $y < 750; $y++) {
    for ($x = 50; $x < 380; $x++) {
        $c = imagecolorat($im, $x, $y);
        $a = ($c >> 24) & 0x7F;
        if ($a > 0) {
            $tablet_transparent_count++;
        }
    }
}

echo "Scan results:\n";
echo "  Laptop screen box has $laptop_transparent_count transparent/semi-transparent pixels.\n";
echo "  Tablet screen box has $tablet_transparent_count transparent/semi-transparent pixels.\n";

imagedestroy($im);
?>

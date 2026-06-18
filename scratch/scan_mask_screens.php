<?php
$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/';

$laptop = imagecreatefrompng($dir . 'schoolian_mockup_laptop.png');
if ($laptop) {
    $laptop_trans = 0;
    $laptop_opaque = 0;
    // Bounding box for Laptop Screen:
    // X from 80 to 440, Y from 35 to 260
    for ($y = 35; $y <= 260; $y++) {
        for ($x = 80; $x <= 440; $x++) {
            $c = imagecolorat($laptop, $x, $y);
            $a = ($c >> 24) & 0x7F;
            if ($a > 0) {
                $laptop_trans++;
            } else {
                $laptop_opaque++;
            }
        }
    }
    echo "Laptop screen mask scan: opaque=$laptop_opaque, transparent=$laptop_trans\n";
    imagedestroy($laptop);
}

$tablet = imagecreatefrompng($dir . 'schoolian_mockup_tablet.png');
if ($tablet) {
    $tablet_trans = 0;
    $tablet_opaque = 0;
    // Bounding box for Tablet Screen:
    // X from 50 to 380, Y from 50 to 570
    for ($y = 50; $y <= 570; $y++) {
        for ($x = 50; $x <= 380; $x++) {
            $c = imagecolorat($tablet, $x, $y);
            $a = ($c >> 24) & 0x7F;
            if ($a > 0) {
                $tablet_trans++;
            } else {
                $tablet_opaque++;
            }
        }
    }
    echo "Tablet screen mask scan: opaque=$tablet_opaque, transparent=$tablet_trans\n";
    imagedestroy($tablet);
}
?>

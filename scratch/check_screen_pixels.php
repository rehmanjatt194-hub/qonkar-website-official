<?php
$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/';

$laptop = imagecreatefrompng($dir . 'schoolian_mockup_laptop.png');
if ($laptop) {
    $c = imagecolorat($laptop, 260, 150);
    $r = ($c >> 16) & 0xFF;
    $g = ($c >> 8) & 0xFF;
    $b = $c & 0xFF;
    $a = ($c >> 24) & 0x7F;
    echo "Laptop screen center (260, 150): R=$r, G=$g, B=$b, Alpha=$a (127 means transparent)\n";
    imagedestroy($laptop);
}

$tablet = imagecreatefrompng($dir . 'schoolian_mockup_tablet.png');
if ($tablet) {
    $c = imagecolorat($tablet, 215, 300);
    $r = ($c >> 16) & 0xFF;
    $g = ($c >> 8) & 0xFF;
    $b = $c & 0xFF;
    $a = ($c >> 24) & 0x7F;
    echo "Tablet screen center (215, 300): R=$r, G=$g, B=$b, Alpha=$a (127 means transparent)\n";
    imagedestroy($tablet);
}
?>

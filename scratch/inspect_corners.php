<?php
$path = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/homalix_laptop_mockup_transparent.png';
$im = imagecreatefrompng($path);
if (!$im) {
    die("Failed to load image\n");
}

echo "Top-left 20x20 pixels color inspection:\n";
for ($y = 0; $y < 20; $y++) {
    for ($x = 0; $x < 20; $x++) {
        $c = imagecolorat($im, $x, $y);
        $r = ($c >> 16) & 0xFF;
        $g = ($c >> 8) & 0xFF;
        $b = $c & 0xFF;
        $a = ($c >> 24) & 0x7F;
        printf("(%3d,%3d): RGB=(%3d,%3d,%3d) A=%d\n", $x, $y, $r, $g, $b, $a);
    }
}
imagedestroy($im);
?>

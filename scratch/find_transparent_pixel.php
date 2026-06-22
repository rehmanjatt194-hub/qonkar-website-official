<?php
$path = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/homalix_laptop_mockup_transparent.png';
$data = file_get_contents($path);
$im = imagecreatefromstring($data);
$w = imagesx($im);
$h = imagesy($im);

for ($y = 0; $y < $h; $y++) {
    for ($x = 0; $x < $w; $x++) {
        $c = imagecolorat($im, $x, $y);
        $a = ($c >> 24) & 0x7F;
        if ($a == 127) {
            echo "First transparent pixel at ($x, $y)\n";
            break 2;
        }
    }
}
imagedestroy($im);
?>

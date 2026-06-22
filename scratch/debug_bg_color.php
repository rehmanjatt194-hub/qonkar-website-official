<?php
$path = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/homalix_laptop_mockup_transparent.png';
$data = file_get_contents($path);
$im = imagecreatefromstring($data);

$c = imagecolorat($im, 0, 0);
$r = ($c >> 16) & 0xFF;
$g = ($c >> 8) & 0xFF;
$b = $c & 0xFF;
$a = ($c >> 24) & 0x7F;

echo "Pixel (0,0): R=$r, G=$g, B=$b, A=$a\n";

$is_white = ($r >= 240 && $g >= 240 && $b >= 240);
$is_grey = ($r >= 215 && $r <= 238 && $g >= 215 && $g <= 238 && $b >= 215 && $b <= 238 && abs($r - $g) <= 6 && abs($g - $b) <= 6 && abs($r - $b) <= 6);

echo "Is white? " . ($is_white ? "YES" : "NO") . "\n";
echo "Is grey? " . ($is_grey ? "YES" : "NO") . "\n";

imagedestroy($im);
?>

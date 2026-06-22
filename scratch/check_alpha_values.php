<?php
$path = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/homalix_laptop_mockup_transparent.png';
$data = file_get_contents($path);
$im = imagecreatefromstring($data);
$w = imagesx($im);
$h = imagesy($im);

$alphas = array_fill(0, 128, 0);

for ($y = 0; $y < $h; $y++) {
    for ($x = 0; $x < $w; $x++) {
        $c = imagecolorat($im, $x, $y);
        $a = ($c >> 24) & 0x7F;
        $alphas[$a]++;
    }
}

echo "Alpha value distribution:\n";
for ($a = 0; $a <= 127; $a++) {
    if ($alphas[$a] > 0) {
        echo "Alpha $a: " . $alphas[$a] . " pixels\n";
    }
}

imagedestroy($im);
?>

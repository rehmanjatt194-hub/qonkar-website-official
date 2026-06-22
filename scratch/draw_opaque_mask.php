<?php
$path = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/homalix_laptop_mockup_transparent.png';
$data = file_get_contents($path);
$im = imagecreatefromstring($data);
$w = imagesx($im);
$h = imagesy($im);

$mask = imagecreatetruecolor($w, $h);
$black = imagecolorallocate($mask, 0, 0, 0); // Opaque
$white = imagecolorallocate($mask, 255, 255, 255); // Transparent
imagefill($mask, 0, 0, $white);

for ($y = 0; $y < $h; $y++) {
    for ($x = 0; $x < $w; $x++) {
        $c = imagecolorat($im, $x, $y);
        $a = ($c >> 24) & 0x7F;
        if ($a < 127) {
            imagesetpixel($mask, $x, $y, $black);
        }
    }
}

imagepng($mask, 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/scratch/laptop_opacity_mask.png');
imagedestroy($im);
imagedestroy($mask);
echo "Saved laptop_opacity_mask.png\n";
?>

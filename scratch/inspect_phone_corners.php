<?php
$path = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/homalix_phone_mockup_transparent.png';
$data = file_get_contents($path);
$im = imagecreatefromstring($data);
$w = imagesx($im);
$h = imagesy($im);

echo "Phone top-left 10x10 pixels color inspection:\n";
for ($y = 0; $y < 10; $y++) {
    for ($x = 0; $x < 10; $x++) {
        $c = imagecolorat($im, $x, $y);
        $r = ($c >> 16) & 0xFF;
        $g = ($c >> 8) & 0xFF;
        $b = $c & 0xFF;
        $a = ($c >> 24) & 0x7F;
        printf("(%d,%d): RGB=(%d,%d,%d) A=%d\n", $x, $y, $r, $g, $b, $a);
    }
}
imagedestroy($im);
?>

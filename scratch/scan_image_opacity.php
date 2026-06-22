<?php
$path = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/homalix_laptop_mockup_transparent.png';
$data = file_get_contents($path);
$im = imagecreatefromstring($data);
$w = imagesx($im);
$h = imagesy($im);

$opaque_count = 0;
$transparent_count = 0;
$min_x = $w; $max_x = 0;
$min_y = $h; $max_y = 0;

for ($y = 0; $y < $h; $y++) {
    for ($x = 0; $x < $w; $x++) {
        $c = imagecolorat($im, $x, $y);
        $a = ($c >> 24) & 0x7F;
        if ($a < 127) { // Some opacity (even partial)
            $opaque_count++;
            if ($x < $min_x) $min_x = $x;
            if ($x > $max_x) $max_x = $x;
            if ($y < $min_y) $min_y = $y;
            if ($y > $max_y) $max_y = $y;
        } else {
            $transparent_count++;
        }
    }
}

echo "Image dimensions: {$w}x{$h}\n";
echo "Transparent pixels: $transparent_count\n";
echo "Opaque/semi-transparent pixels: $opaque_count\n";
echo "Opaque bounding box: X=[$min_x, $max_x], Y=[$min_y, $max_y] (Width=" . ($max_x - $min_x + 1) . ", Height=" . ($max_y - $min_y + 1) . ")\n";

// Print colors of some pixels inside the bounding box but away from the laptop (e.g., at X=$min_x + 10, Y=$min_y + 10)
$test_x = $min_x + 10;
$test_y = $min_y + 10;
if ($test_x < $w && $test_y < $h) {
    $c = imagecolorat($im, $test_x, $test_y);
    $r = ($c >> 16) & 0xFF;
    $g = ($c >> 8) & 0xFF;
    $b = $c & 0xFF;
    $a = ($c >> 24) & 0x7F;
    echo "Pixel ($test_x, $test_y) inside bounds: R=$r, G=$g, B=$b, Alpha=$a\n";
}

imagedestroy($im);
?>

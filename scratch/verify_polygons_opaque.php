<?php
$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/';
$path = $dir . 'schoolian_devices_mockup_transparent.png';

$im = imagecreatefrompng($path);
if (!$im) {
    die("Failed to load output image\n");
}

$w = imagesx($im);
$h = imagesy($im);

function is_inside_poly($x, $y, $polygon) {
    $inside = false;
    $n = count($polygon);
    for ($i = 0, $j = $n - 1; $i < $n; $j = $i++) {
        if ((($polygon[$i][1] > $y) != ($polygon[$j][1] > $y)) &&
            ($x < ($polygon[$j][0] - $polygon[$i][0]) * ($y - $polygon[$i][1]) / ($polygon[$j][1] - $polygon[$i][1]) + $polygon[$i][0])) {
            $inside = !$inside;
        }
    }
    return $inside;
}

$tablet_poly = [
    [0, 340],
    [430, 200],
    [431, 600],
    [0, 835]
];

$laptop_poly = [
    [360, 500],
    [460, 200],
    [881, 200],
    [881, 725],
    [360, 725]
];

$phone_poly = [
    [830, 595],
    [960, 655],
    [710, 890],
    [595, 780]
];

$polygons = [
    'tablet' => $tablet_poly,
    'laptop' => $laptop_poly,
    'phone'  => $phone_poly
];

foreach ($polygons as $name => $poly) {
    $trans_count = 0;
    $opaque_count = 0;
    
    // Scan all pixels in image
    for ($y = 0; $y < $h; $y++) {
        for ($x = 0; $x < $w; $x++) {
            if (is_inside_poly($x, $y, $poly)) {
                $c = imagecolorat($im, $x, $y);
                $a = ($c >> 24) & 0x7F;
                if ($a > 0) {
                    $trans_count++;
                } else {
                    $opaque_count++;
                }
            }
        }
    }
    
    echo "$name: Inside polygon has $opaque_count opaque pixels and $trans_count transparent pixels.\n";
}

imagedestroy($im);
?>

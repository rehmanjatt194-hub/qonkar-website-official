<?php
ini_set('memory_limit', '512M');
$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/';

$devices = [
    'laptop' => $dir . 'schoolian_mockup_laptop.png',
    'tablet' => $dir . 'schoolian_mockup_tablet.png',
    'phone' => $dir . 'schoolian_mockup_phone.png'
];

foreach ($devices as $name => $path) {
    $im = imagecreatefrompng($path);
    if (!$im) continue;
    
    $w = imagesx($im);
    $h = imagesy($im);
    
    // Create sealed copy
    $sealed = imagecreatetruecolor($w, $h);
    imagealphablending($sealed, false);
    imagesavealpha($sealed, true);
    imagecopy($sealed, $im, 0, 0, 0, 0, $w, $h);
    
    $opaque_c = imagecolorallocatealpha($sealed, 0, 0, 0, 0);
    // Seal bottom rows
    for ($y = $h - 15; $y < $h; $y++) {
        for ($x = 0; $x < $w; $x++) {
            imagesetpixel($sealed, $x, $y, $opaque_c);
        }
    }
    
    $visited = [];
    for ($x = 0; $x < $w; $x++) {
        $visited[$x] = array_fill(0, $h, false);
    }
    
    $queue = [];
    $is_trans = function($x, $y) use ($sealed) {
        $c = imagecolorat($sealed, $x, $y);
        $a = ($c >> 24) & 0x7F;
        return $a >= 64;
    };
    
    for ($x = 0; $x < $w; $x++) {
        if ($is_trans($x, 0)) { $visited[$x][0] = true; $queue[] = [$x, 0]; }
        if ($is_trans($x, $h - 1)) { $visited[$x][$h - 1] = true; $queue[] = [$x, $h - 1]; }
    }
    for ($y = 0; $y < $h; $y++) {
        if ($is_trans(0, $y)) { $visited[0][$y] = true; $queue[] = [0, $y]; }
        if ($is_trans($w - 1, $y)) { $visited[$w - 1][$y] = true; $queue[] = [$w - 1, $y]; }
    }
    
    $dx = [1, -1, 0, 0];
    $dy = [0, 0, 1, -1];
    $head = 0;
    while ($head < count($queue)) {
        list($cx, $cy) = $queue[$head++];
        for ($i = 0; $i < 4; $i++) {
            $nx = $cx + $dx[$i];
            $ny = $cy + $dy[$i];
            if ($nx >= 0 && $nx < $w && $ny >= 0 && $ny < $h) {
                if (!$visited[$nx][$ny] && $is_trans($nx, $ny)) {
                    $visited[$nx][$ny] = true;
                    $queue[] = [$nx, $ny];
                }
            }
        }
    }
    
    $min_x = $w; $max_x = 0;
    $min_y = $h; $max_y = 0;
    for ($y = 0; $y < $h; $y++) {
        for ($x = 0; $x < $w; $x++) {
            if ($is_trans($x, $y) && !$visited[$x][$y]) {
                if ($x < $min_x) $min_x = $x;
                if ($x > $max_x) $max_x = $x;
                if ($y < $min_y) $min_y = $y;
                if ($y > $max_y) $max_y = $y;
            }
        }
    }
    
    echo "$name screen bounds: X=[$min_x, $max_x], Y=[$min_y, $max_y] (Width=" . ($max_x - $min_x + 1) . ", Height=" . ($max_y - $min_y + 1) . ")\n";
    
    imagedestroy($im);
    imagedestroy($sealed);
}
?>

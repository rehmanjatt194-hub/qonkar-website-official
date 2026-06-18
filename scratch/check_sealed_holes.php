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
    
    // Create a modified copy of the mask where the bottom N rows are made opaque
    $sealed = imagecreatetruecolor($w, $h);
    imagealphablending($sealed, false);
    imagesavealpha($sealed, true);
    imagecopy($sealed, $im, 0, 0, 0, 0, $w, $h);
    
    // Seal the bottom 10 rows by setting their alpha to 0 (opaque)
    // Only for pixels that aren't already opaque, we make them black/opaque.
    $opaque_c = imagecolorallocatealpha($sealed, 0, 0, 0, 0);
    for ($y = $h - 15; $y < $h; $y++) {
        for ($x = 0; $x < $w; $x++) {
            imagesetpixel($sealed, $x, $y, $opaque_c);
        }
    }
    
    // Also seal the left and right border columns just in case
    for ($y = 0; $y < $h; $y++) {
        for ($x = 0; $x < 15; $x++) {
            // If the device touches left/right
            // imagesetpixel($sealed, $x, $y, $opaque_c);
            // imagesetpixel($sealed, $w - 1 - $x, $y, $opaque_c);
        }
    }
    
    // Now run BFS
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
    
    // BFS starting from the top, left, right borders (not bottom, since we sealed it and it represents the crop)
    // Actually, starting from any border is fine because the sealed bottom is now opaque, so BFS won't leak through it.
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
    
    $holes = 0;
    $total_trans = 0;
    for ($y = 0; $y < $h; $y++) {
        for ($x = 0; $x < $w; $x++) {
            if ($is_trans($x, $y)) {
                $total_trans++;
                if (!$visited[$x][$y]) {
                    $holes++;
                }
            }
        }
    }
    
    echo "$name (sealed bottom 15 rows): Total transparent=$total_trans, Enclosed Holes=$holes\n";
    
    imagedestroy($im);
    imagedestroy($sealed);
}
?>

<?php
ini_set('memory_limit', '512M');

$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/';
$output_dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/scratch/';

// Re-declare helper functions
function debug_is_pixel_transparent($im, $x, $y) {
    $c = imagecolorat($im, $x, $y);
    $a = ($c >> 24) & 0x7F;
    return $a >= 64;
}

function debug_fill_mask_holes($im, $name) {
    $w = imagesx($im);
    $h = imagesy($im);
    
    $visited = [];
    for ($x = 0; $x < $w; $x++) {
        $visited[$x] = array_fill(0, $h, false);
    }
    
    $queue = [];
    
    for ($x = 0; $x < $w; $x++) {
        if (debug_is_pixel_transparent($im, $x, 0)) { $visited[$x][0] = true; $queue[] = [$x, 0]; }
        if (debug_is_pixel_transparent($im, $x, $h - 1)) { $visited[$x][$h - 1] = true; $queue[] = [$x, $h - 1]; }
    }
    for ($y = 0; $y < $h; $y++) {
        if (debug_is_pixel_transparent($im, 0, $y)) { $visited[0][$y] = true; $queue[] = [0, $y]; }
        if (debug_is_pixel_transparent($im, $w - 1, $y)) { $visited[$w - 1][$y] = true; $queue[] = [$w - 1, $y]; }
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
                if (!$visited[$nx][$ny] && debug_is_pixel_transparent($im, $nx, $ny)) {
                    $visited[$nx][$ny] = true;
                    $queue[] = [$nx, $ny];
                }
            }
        }
    }
    
    // Create visualization image:
    // Opaque -> original color
    // Outside Transparent -> Red
    // Inside Holes (Filled) -> Green
    $vis = imagecreatetruecolor($w, $h);
    imagealphablending($vis, false);
    imagesavealpha($vis, true);
    
    $red = imagecolorallocatealpha($vis, 255, 0, 0, 0);
    $green = imagecolorallocatealpha($vis, 0, 255, 0, 0);
    
    for ($y = 0; $y < $h; $y++) {
        for ($x = 0; $x < $w; $x++) {
            if (debug_is_pixel_transparent($im, $x, $y)) {
                if ($visited[$x][$y]) {
                    imagesetpixel($vis, $x, $y, $red);
                } else {
                    imagesetpixel($vis, $x, $y, $green);
                }
            } else {
                imagecopy($vis, $im, $x, $y, $x, $y, 1, 1);
            }
        }
    }
    
    imagepng($vis, "C:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/scratch/mask_vis_{$name}.png");
    imagedestroy($vis);
}

foreach (['laptop', 'tablet', 'phone'] as $name) {
    $path = $dir . "schoolian_mockup_{$name}.png";
    if (file_exists($path)) {
        $im = imagecreatefrompng($path);
        debug_fill_mask_holes($im, $name);
        imagedestroy($im);
        echo "Saved mask_vis_{$name}.png\n";
    }
}
?>

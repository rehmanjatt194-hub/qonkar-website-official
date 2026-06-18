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
    if (!$im) {
        echo "$name: failed to load\n";
        continue;
    }
    
    $w = imagesx($im);
    $h = imagesy($im);
    
    // Let's run a test with different thresholds to see if it leaks
    // Threshold 64 is what we used (alpha >= 64 is transparent)
    foreach ([64, 80, 100, 120, 127] as $thresh) {
        $visited = [];
        for ($x = 0; $x < $w; $x++) {
            $visited[$x] = array_fill(0, $h, false);
        }
        
        $queue = [];
        
        $is_trans = function($x, $y) use ($im, $thresh) {
            $c = imagecolorat($im, $x, $y);
            $a = ($c >> 24) & 0x7F;
            return $a >= $thresh;
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
        
        // Count unvisited transparent pixels (holes)
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
        
        echo "$name (thresh=$thresh): Total transparent=$total_trans, Enclosed Holes (screens)=$holes\n";
    }
    imagedestroy($im);
}
?>

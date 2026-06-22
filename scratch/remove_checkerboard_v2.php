<?php
ini_set('memory_limit', '512M');

function clean_mockup_image_v2($filename) {
    $path = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/' . $filename;
    if (!file_exists($path)) {
        echo "File $path does not exist\n";
        return;
    }
    
    $data = file_get_contents($path);
    $im = imagecreatefromstring($data);
    if (!$im) {
        echo "Failed to load image $filename\n";
        return;
    }
    
    $w = imagesx($im);
    $h = imagesy($im);
    
    // Create new transparent destination image
    $dst = imagecreatetruecolor($w, $h);
    imagealphablending($dst, false);
    imagesavealpha($dst, true);
    
    // Copy original image
    imagecopy($dst, $im, 0, 0, 0, 0, $w, $h);
    
    // Visited array for BFS
    $visited = [];
    for ($x = 0; $x < $w; $x++) {
        $visited[$x] = array_fill(0, $h, false);
    }
    
    $queue = [];
    
    // Helper to check if pixel is background
    $is_bg = function($x, $y) use ($im) {
        $c = imagecolorat($im, $x, $y);
        $a = ($c >> 24) & 0x7F;
        
        // If already transparent, it is background
        if ($a >= 100) {
            return true;
        }
        
        // Otherwise, check if it's light grey or white
        $r = ($c >> 16) & 0xFF;
        $g = ($c >> 8) & 0xFF;
        $b = $c & 0xFF;
        
        if ($r >= 210 && $g >= 210 && $b >= 210) {
            if (abs($r - $g) <= 10 && abs($g - $b) <= 10 && abs($r - $b) <= 10) {
                return true;
            }
        }
        
        return false;
    };
    
    // Add all border pixels to queue if they are background
    for ($x = 0; $x < $w; $x++) {
        if ($is_bg($x, 0)) { $visited[$x][0] = true; $queue[] = [$x, 0]; }
        if ($is_bg($x, $h - 1)) { $visited[$x][$h - 1] = true; $queue[] = [$x, $h - 1]; }
    }
    for ($y = 0; $y < $h; $y++) {
        if ($is_bg(0, $y)) { $visited[0][$y] = true; $queue[] = [0, $y]; }
        if ($is_bg($w - 1, $y)) { $visited[$w - 1][$y] = true; $queue[] = [$w - 1, $y]; }
    }
    
    // BFS traversal
    $dx = [1, -1, 0, 0];
    $dy = [0, 0, 1, -1];
    $head = 0;
    
    while ($head < count($queue)) {
        list($cx, $cy) = $queue[$head++];
        for ($i = 0; $i < 4; $i++) {
            $nx = $cx + $dx[$i];
            $ny = $cy + $dy[$i];
            if ($nx >= 0 && $nx < $w && $ny >= 0 && $ny < $h) {
                if (!$visited[$nx][$ny] && $is_bg($nx, $ny)) {
                    $visited[$nx][$ny] = true;
                    $queue[] = [$nx, $ny];
                }
            }
        }
    }
    
    // Set all visited pixels to transparent
    $trans = imagecolorallocatealpha($dst, 0, 0, 0, 127);
    $cleaned_count = 0;
    
    for ($y = 0; $y < $h; $y++) {
        for ($x = 0; $x < $w; $x++) {
            if ($visited[$x][$y]) {
                imagesetpixel($dst, $x, $y, $trans);
                $cleaned_count++;
            }
        }
    }
    
    // Save cleaned image back
    imagepng($dst, $path);
    
    imagedestroy($im);
    imagedestroy($dst);
    
    echo "Cleaned $filename: set $cleaned_count pixels to transparent out of " . ($w * $h) . ".\n";
}

clean_mockup_image_v2('homalix_laptop_mockup_transparent.png');
clean_mockup_image_v2('homalix_phone_mockup_transparent.png');
?>

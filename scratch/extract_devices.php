<?php
ini_set('memory_limit', '512M');

$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/';
$base_path = $dir . 'schoolian_devices_mockup.png';

$base_im = imagecreatefromjpeg($base_path);
if (!$base_im) {
    die("Failed to load base image\n");
}

$w = imagesx($base_im);
$h = imagesy($base_im);

// Create transparent destination image
$dst_im = imagecreatetruecolor($w, $h);
imagealphablending($dst_im, false);
imagesavealpha($dst_im, true);

// Ray casting algorithm for point-in-polygon check
function is_inside_polygon($x, $y, $polygon) {
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

// Define polygons for each device in the 1024x1024 space
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

echo "Processing pixels with Ray-Casting polygons...\n";

for ($y = 0; $y < $h; $y++) {
    for ($x = 0; $x < $w; $x++) {
        // Get base pixel color
        $base_c = imagecolorat($base_im, $x, $y);
        $r = ($base_c >> 16) & 0xFF;
        $g = ($base_c >> 8) & 0xFF;
        $b = $base_c & 0xFF;
        
        // Check if inside any device polygon
        $in_device = false;
        foreach ($polygons as $name => $poly) {
            if (is_inside_polygon($x, $y, $poly)) {
                $in_device = true;
                break;
            }
        }
        
        if ($in_device) {
            // Keep pixel opaque
            $dst_c = imagecolorallocatealpha($dst_im, $r, $g, $b, 0);
            imagesetpixel($dst_im, $x, $y, $dst_c);
        } else {
            // Apply black-keying for reflection and background
            $max = max($r, $g, $b);
            
            $v_low = 32;    // Noise threshold
            $v_high = 130;  // Fully opaque threshold
            
            if ($max <= $v_low) {
                // Background pixel: fully transparent
                $dst_c = imagecolorallocatealpha($dst_im, 0, 0, 0, 127);
                imagesetpixel($dst_im, $x, $y, $dst_c);
            } else {
                // Interpolate alpha
                $t = ($max - $v_low) / ($v_high - $v_low);
                $t = max(0.0, min(1.0, $t));
                
                // Boost midtones
                $opacity_factor = pow($t, 0.6);
                $alpha = $opacity_factor * 255;
                
                // Convert to GD alpha
                $gd_alpha = 127 - round(($alpha / 255) * 127);
                $gd_alpha = max(0, min(127, $gd_alpha));
                
                // Un-premultiply
                $ur = min(255, round(($r / $max) * 255));
                $ug = min(255, round(($g / $max) * 255));
                $ub = min(255, round(($b / $max) * 255));
                
                $dst_c = imagecolorallocatealpha($dst_im, $ur, $ug, $ub, $gd_alpha);
                imagesetpixel($dst_im, $x, $y, $dst_c);
            }
        }
    }
}

// Save output
$out_path = $dir . 'schoolian_devices_mockup_transparent.png';
imagepng($dst_im, $out_path);

// Cleanup
imagedestroy($base_im);
imagedestroy($dst_im);

echo "Saved transparent mockup with polygon masks to: $out_path\n";
?>

<?php
$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/';
$path = $dir . 'schoolian_mockup_tablet.png';

$im = imagecreatefrompng($path);
if ($im) {
    $w = imagesx($im);
    $h = imagesy($im);
    
    echo "Column analysis (sampled every 20 columns):\n";
    for ($x = 0; $x < $w; $x += 20) {
        $min_y = -1;
        $max_y = -1;
        $opaque_count = 0;
        $trans_count = 0;
        
        for ($y = 0; $y < $h; $y++) {
            $c = imagecolorat($im, $x, $y);
            $a = ($c >> 24) & 0x7F;
            if ($a < 64) {
                if ($min_y == -1) $min_y = $y;
                $max_y = $y;
                $opaque_count++;
            } else {
                $trans_count++;
            }
        }
        
        echo "  Col $x: min_y=$min_y, max_y=$max_y, opaque=$opaque_count, trans=$trans_count\n";
    }
    imagedestroy($im);
}
?>

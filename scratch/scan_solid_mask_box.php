<?php
$path = 'C:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/scratch/solid_mask_tablet.png';
$im = imagecreatefrompng($path);
if ($im) {
    $w = imagesx($im);
    $h = imagesy($im);
    
    // Scan coordinates corresponding to Tablet Screen (X: 50 to 380, Y in mask: 44 to 544)
    $trans = 0;
    $opaque = 0;
    for ($y = 44; $y <= 544; $y++) {
        for ($x = 50; $x <= 380; $x++) {
            $c = imagecolorat($im, $x, $y);
            $a = ($c >> 24) & 0x7F;
            if ($a >= 64) {
                $trans++;
            } else {
                $opaque++;
            }
        }
    }
    echo "Solid tablet mask scan inside screen coordinates: opaque=$opaque, transparent=$trans\n";
    imagedestroy($im);
}
?>

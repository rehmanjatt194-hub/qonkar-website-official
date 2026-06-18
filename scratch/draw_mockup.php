<?php
$dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/images/case-studies/';
$output_dir = 'c:/Users/PMYLS/Desktop/homalix upgreate/qonkar-website-official/scratch/';

foreach (['laptop', 'phone', 'tablet'] as $name) {
    $path = $dir . "schoolian_mockup_{$name}.png";
    if (!file_exists($path)) continue;
    
    $src = imagecreatefrompng($path);
    $w = imagesx($src);
    $h = imagesy($src);
    
    // Create a new image with a red background to make transparency obvious
    $dst = imagecreatetruecolor($w, $h);
    $red = imagecolorallocate($dst, 255, 0, 0);
    imagefill($dst, 0, 0, $red);
    
    imagecopy($dst, $src, 0, 0, 0, 0, $w, $h);
    imagepng($dst, $output_dir . "check_{$name}.png");
    
    imagedestroy($src);
    imagedestroy($dst);
    echo "Saved check_{$name}.png\n";
}
?>

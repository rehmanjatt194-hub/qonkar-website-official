<?php
$path = 'portfolio.php';
$content = file_get_contents($path);
$content = str_replace('w-full px-2 sm:px-8 lg:px-8 pt-4 pb-10 sm:pt-6 sm:pb-14', 'w-full pt-4 pb-10 sm:pt-6 sm:pb-14', $content);
file_put_contents($path, $content);
echo "Fixed portfolio padding to align with logo!\n";
?>

<?php
$dir = new RecursiveDirectoryIterator('.');
$ite = new RecursiveIteratorIterator($dir);
$files = new RegexIterator($ite, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);

$button_pattern = '/<(a|button)[^>]*class="([^"]*(?:px-\d+|py-\d+|btn|rounded-full)[^"]*)"[^>]*>/i';
$files_with_buttons = [];
$total_buttons = 0;

foreach($files as $file) {
    $path = $file[0];
    if (strpos($path, 'node_modules') !== false || strpos($path, '.git') !== false || strpos($path, 'scratch') !== false) {
        continue;
    }
    
    $content = file_get_contents($path);
    if (preg_match_all($button_pattern, $content, $matches)) {
        $valid_matches = [];
        foreach ($matches[2] as $cls) {
            if (strpos($cls, 'w-2') !== false || strpos($cls, 'w-5') !== false || strpos($cls, 'h-5') !== false || strpos($cls, 'badge') !== false || strpos($cls, 'w-12') !== false || strpos($cls, 'w-14') !== false || strpos($cls, 'w-7') !== false || strpos($cls, 'w-9') !== false) {
                continue;
            }
            if (strpos($cls, 'rounded-full') !== false || strpos($cls, 'btn') !== false || (strpos($cls, 'px-') !== false && strpos($cls, 'py-') !== false)) {
                $valid_matches[] = $cls;
            }
        }
        if (!empty($valid_matches)) {
            $files_with_buttons[$path] = $valid_matches;
            $total_buttons += count($valid_matches);
        }
    }
}

echo "Found " . count($files_with_buttons) . " files with a total of $total_buttons buttons.\n";
foreach ($files_with_buttons as $k => $v) {
    echo "$k -> " . count($v) . " buttons\n";
    // echo "  " . implode("\n  ", $v) . "\n";
}
?>

<?php
$dir = new RecursiveDirectoryIterator('.');
$ite = new RecursiveIteratorIterator($dir);
$files = new RegexIterator($ite, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);

$target_texts = [
    'View More Case Studies',
    'Get Your Free Proposal',
    'Discuss Your Project With Us',
    'Get in Touch Today!'
];

$count = 0;

foreach($files as $file) {
    $path = $file[0];
    if (strpos($path, 'node_modules') !== false || strpos($path, '.git') !== false || strpos($path, 'scratch') !== false || strpos($path, 'system-core-portal-admin-dashboard') !== false) {
        continue;
    }
    
    $content = file_get_contents($path);
    $modified = false;

    // We will find all instances of btn-dark-theme and check if it's followed by our target texts within the same tag block.
    // A simpler approach: Since these CTA sections are pretty standard, we can use regex to find `<a[^>]*btn-dark-theme[^>]*>(?:(?!\/a>).)*?(TargetText)(?:(?!\/a>).)*?<\/a>`
    // Actually, simple regex replacement is easier:
    
    foreach ($target_texts as $text) {
        $pattern = '/(<a[^>]*?class="[^"]*?)btn-dark-theme([^"]*?"[^>]*>(?:(?!<\/a>).)*?' . preg_quote($text, '/') . '(?:(?!<\/a>).)*?<\/a>)/is';
        if (preg_match($pattern, $content)) {
            $content = preg_replace($pattern, '$1btn-light-theme$2', $content);
            $modified = true;
        }
        
        // Also check for <button> just in case
        $pattern_btn = '/(<button[^>]*?class="[^"]*?)btn-dark-theme([^"]*?"[^>]*>(?:(?!<\/button>).)*?' . preg_quote($text, '/') . '(?:(?!<\/button>).)*?<\/button>)/is';
        if (preg_match($pattern_btn, $content)) {
            $content = preg_replace($pattern_btn, '$1btn-light-theme$2', $content);
            $modified = true;
        }
    }

    if ($modified) {
        file_put_contents($path, $content);
        echo "Updated $path\n";
        $count++;
    }
}

echo "Total files updated: $count\n";
?>

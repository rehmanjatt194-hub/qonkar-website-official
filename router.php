<?php
// router.php - Custom router for PHP built-in web server

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// If it's a physical file, serve it directly
if (file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}

// Serve index.php for a directory path if it exists
$dirPath = __DIR__ . '/' . ltrim($uri, '/');
if (is_dir($dirPath)) {
    $dirIndex = rtrim($dirPath, '/') . '/index.php';
    if (file_exists($dirIndex)) {
        chdir(dirname($dirIndex));
        include $dirIndex;
        return;
    }
}


// Normalize trailing slash for root-level checks
$normalizedUri = rtrim($uri, '/');

// 1. Explicit rule for Portfolio
if ($normalizedUri === '/portfolio') {
    chdir(__DIR__);
    include __DIR__ . '/portfolio.php';
    return;
}


// 2. Handlers routing rule
if (preg_match('#^/handlers/([^/]+)$#', $normalizedUri, $matches)) {
    $handlerFile = __DIR__ . '/handlers/' . $matches[1] . (str_ends_with($matches[1], '.php') ? '' : '.php');
    if (file_exists($handlerFile)) {
        chdir(dirname($handlerFile));
        include $handlerFile;
        return;
    }
}

// 3. Specific rule for Services subpages
if (preg_match('#^/services/([^/]+)$#', $normalizedUri, $matches)) {
    $serviceFile = __DIR__ . '/services/' . $matches[1] . '.php';
    if (file_exists($serviceFile)) {
        chdir(dirname($serviceFile));
        include $serviceFile;
        return;
    }
}

// 4. Slugs for blogs and job applications
if (preg_match('#^/blog/([^/]+)$#', $normalizedUri, $matches)) {
    $_GET['slug'] = $matches[1];
    chdir(__DIR__);
    include __DIR__ . '/blog-details.php';
    return;
}

if (preg_match('#^/apply/([^/]+)$#', $normalizedUri, $matches)) {
    $_GET['slug'] = $matches[1];
    chdir(__DIR__);
    include __DIR__ . '/apply-job.php';
    return;
}

// 5. Global Clean URLs (e.g. /about-us -> about-us.php)
$phpFile = __DIR__ . $uri . '.php';
if (file_exists($phpFile)) {
    chdir(dirname($phpFile));
    include $phpFile;
    return;
}

// Fallback to 404 page
http_response_code(404);
chdir(__DIR__);
if (file_exists(__DIR__ . '/404.php')) {
    include __DIR__ . '/404.php';
} else {
    echo "404 Not Found";
}
?>

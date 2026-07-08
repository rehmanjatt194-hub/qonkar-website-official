<?php
// Fix about-us.php
$path = 'about-us.php';
if (file_exists($path)) {
    $content = file_get_contents($path);
    // Fix encoding issue
    $content = str_replace('you’re', "you're", $content);
    $content = str_replace('youre', "you're", $content);
    $content = str_replace('you?re', "you're", $content);
    // The weird character might be â€™
    $content = str_replace('youâ€™re', "you're", $content);
    
    // Fix Join Our Team button
    $content = str_replace('class="hero-btn mt-4 btn-dark-theme"', 'class="hero-btn mt-4 btn-light-theme"', $content);
    file_put_contents($path, $content);
    echo "Fixed about-us.php\n";
}

// Fix apply-job.php
$path = 'apply-job.php';
if (file_exists($path)) {
    $content = file_get_contents($path);
    $content = str_replace('btn-dark-theme">
                Join Our Team', 'btn-light-theme">
                Join Our Team', $content);
    $content = str_replace('class="hero-btn mt-4 btn-dark-theme"', 'class="hero-btn mt-4 btn-light-theme"', $content);
    // also regex replace just in case
    $content = preg_replace('/class="([^"]*)btn-dark-theme([^"]*)"([^>]*)>\s*Join Our Team/i', 'class="$1btn-light-theme$2"$3>
                Join Our Team', $content);
    file_put_contents($path, $content);
    echo "Fixed apply-job.php\n";
}

// Fix portfolio.php container
$path = 'portfolio.php';
if (file_exists($path)) {
    $content = file_get_contents($path);
    // Replace w-[95%] with w-full to prevent squishing on mobile
    $content = str_replace('class="relative w-[95%] mx-auto px-4 sm:px-6 lg:px-8', 'class="relative w-full mx-auto px-4 sm:px-6 lg:px-8', $content);
    // Replace the px-4 sm:px-10 lg:px-9 with normal padding so it's not double padded
    $content = str_replace('w-full px-4 sm:px-10 lg:px-9', 'w-full px-2 sm:px-8 lg:px-8', $content);
    file_put_contents($path, $content);
    echo "Fixed portfolio.php\n";
}
?>

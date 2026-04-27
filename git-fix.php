<?php
/**
 * Git Deployment Fixer for cPanel
 * This script resolves "uncommitted changes" errors by forcing a reset.
 */

echo "<h2>Qonkar Git Deployment Fixer</h2>";

// Check if git is available
$git_version = shell_exec("git --version");
if (!$git_version) {
    die("<b style='color:red'>Error: 'git' command not found or shell_exec is disabled on this server.</b>");
}
echo "Git detected: $git_version <br><hr>";

// 1. Force reset local changes on the server
echo "<b>Step 1: Reseting local changes (Discarding server-side edits)...</b><br>";
$output1 = shell_exec("git reset --hard HEAD 2>&1");
echo "<pre>$output1</pre>";

// 2. Clean untracked files that might conflict
echo "<b>Step 2: Cleaning untracked files...</b><br>";
$output2 = shell_exec("git clean -fd 2>&1");
echo "<pre>$output2</pre>";

// 3. Pull latest code from GitHub
echo "<b>Step 3: Pulling latest code from GitHub...</b><br>";
$output3 = shell_exec("git pull origin main 2>&1");
echo "<pre>$output3</pre>";

echo "<hr><h3 style='color:green'>SUCCESS! Your server should now be in sync with GitHub.</h3>";
echo "<p style='color:orange'><b>SECURITY WARNING: Delete this file (git-fix.php) from your server immediately!</b></p>";
?>

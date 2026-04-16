<?php
/**
 * Qonkar Technologies - SMTP Diagnostic Tool
 * This script tests the SMTP connection to Gmail and checks server environment settings.
 */

// Enable error reporting to see any PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Qonkar Technologies - SMTP Diagnostic</h1>";

// 1. Check Server Environment
echo "<h2>1. Server Environment</h2>";
$allow_url_fopen = ini_get('allow_url_fopen');
echo "allow_url_fopen: " . ($allow_url_fopen ? "<span style='color:green;'>ENABLED</span>" : "<span style='color:red;'>DISABLED</span>") . "<br>";

$sendmail_path = ini_get('sendmail_path');
echo "sendmail_path: " . ($sendmail_path ? "<span style='color:green;'>$sendmail_path</span>" : "<span style='color:red;'>NOT CONFIGURED</span>") . "<br>";

// 1b. Test Native mail()
echo "<h2>1b. Native mail() Test</h2>";
$to = 'mowaisrehmani@gmail.com';
$subject = 'Native mail() Test';
$message = 'Testing native PHP mail() function.';
$headers = 'From: hr@qonkar.com' . "\r\n" . 'Reply-To: hr@qonkar.com' . "\r\n";

if (@mail($to, $subject, $message, $headers)) {
    echo "<span style='color:green;'>SUCCESS:</span> Native mail() function reported success.<br>";
} else {
    echo "<span style='color:red;'>FAILED:</span> Native mail() function returned false.<br>";
}

// 2. Check Port 587 Connection
echo "<h2>2. Port 587 Connection Test</h2>";
$host = 'smtp.gmail.com';
$port = 465;
$timeout = 5;

$connection = @fsockopen($host, $port, $errno, $errstr, $timeout);

if ($connection) {
    echo "<span style='color:green;'>SUCCESS:</span> Successfully connected to $host on port $port.<br>";
    fclose($connection);
} else {
    echo "<span style='color:red;'>FAILED:</span> Could not connect to $host on port $port.<br>";
    echo "Error Number: $errno<br>";
    echo "Error Message: $errstr<br>";
    echo "<em>Note: If this fails, your hosting provider is likely blocking outgoing connections on port 465.</em><br>";
}

// 3. PHPMailer Full Debug Test
echo "<h2>3. PHPMailer SMTP Debug Log</h2>";
echo "<pre style='background: #f4f4f4; padding: 15px; border: 1px solid #ccc;'>";

// PHPMailer Inclusion logic
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
} else {
    require __DIR__ . '/PHPMailer/src/Exception.php';
    require __DIR__ . '/PHPMailer/src/PHPMailer.php';
    require __DIR__ . '/PHPMailer/src/SMTP.php';
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

try {
    $mail = new PHPMailer(true);
    
    // Most verbose debug output
    $mail->SMTPDebug = 4; 
    
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'mail.qonkar.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'hr@qonkar.com'; 
    $mail->Password   = 'Qonkar3972@'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // SSL Options (Bypass cert verification)
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    // Recipients
    $mail->setFrom('hr@qonkar.com', 'Diagnostic Test');
    $mail->addAddress('mowaisrehmani@gmail.com', 'M. Owais Rehmani (CEO)');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Diagnostic Test: Qonkar Website SMTP';
    $mail->Body    = 'This is a test email from the Qonkar diagnostic script to verify SMTP settings.';

    $mail->send();
    echo "\n\n<strong style='color:green;'>SUCCESS: Mail has been sent successfully!</strong>";
} catch (Exception $e) {
    echo "\n\n<strong style='color:red;'>ERROR: Mail could not be sent.</strong>";
    echo "\nMailer Error: " . $mail->ErrorInfo;
}

echo "</pre>";
?>

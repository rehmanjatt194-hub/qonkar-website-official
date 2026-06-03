<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

echo "<h2>Live SMTP Probe Started</h2>";

$methods = [
    "PHP Native mail()" => function() {
        return mail("qonkartechnologiespvtltd@gmail.com", "PHP mail() Test", "System check", "From: no-reply@qonkar.com") ? "Success" : "Failed";
    },
    "PHPMailer isMail()" => function() {
        $mail = new PHPMailer(true);
        $mail->setFrom('no-reply@qonkar.com', 'Probe');
        $mail->addAddress('qonkartechnologiespvtltd@gmail.com');
        $mail->Subject = 'isMail Probe';
        $mail->Body = 'Checking isMail delivery';
        $mail->isMail();
        return $mail->send() ? "Success" : "Failed";
    },
    "Localhost Port 25 (No Auth)" => function() {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->Port = 25;
        $mail->SMTPAuth = false;
        $mail->setFrom('no-reply@qonkar.com', 'Probe');
        $mail->addAddress('qonkartechnologiespvtltd@gmail.com');
        $mail->Subject = 'Local SMTP Test';
        $mail->Body = 'Testing local mail server';
        return $mail->send() ? "Success" : "Failed";
    }
];

foreach ($methods as $name => $fn) {
    echo "Testing $name: ... ";
    try {
        $res = $fn();
        echo "<b>$res</b><br>";
    } catch (Exception $e) {
        echo "<span style='color:red'>Error: " . $e->getMessage() . "</span><br>";
    } catch (Throwable $t) {
        echo "<span style='color:red'>Exception: " . $t->getMessage() . "</span><br>";
    }
}
echo "<h3>End of Probe</h3>";
?>

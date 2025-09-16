<?php

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $name    = $_POST['full_name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $phone   = $_POST['phone_number'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $budget  = $_POST['budget'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($name) && !empty($email) && !empty($message)) {
        try {
            // ✅ Database connection
            $pdo = new PDO("mysql:host=localhost;dbname=u870396814_qonkar_contact;charset=utf8", "u870396814_Thalseemia	", "Thalseemia@1203");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Save message
            $stmt = $pdo->prepare("
                INSERT INTO messages (full_name, email, phone_number, subject, budget, message)
                VALUES (:name, :email, :phone, :subject, :budget, :message)
            ");
            $stmt->execute([
                ":name"    => $name,
                ":email"   => $email,
                ":phone"   => $phone,
                ":subject" => $subject,
                ":budget"  => $budget,
                ":message" => $message
            ]);

            // ✅ Email sending with PHPMailer
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->Port       = 587;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->SMTPAuth   = true;
            $mail->Username   = 'huzaifaharis415@gmail.com'; // SMTP login
            $mail->Password   = 'apmgxtyxeuhdsnho';          // App password

            $mail->setFrom('huzaifaharis415@gmail.com', 'Qonkar Technologies');
            $mail->addReplyTo('huzaifaharis415@gmail.com', 'Qonkar Technologies');

            // Send to user who filled the form
            $mail->addAddress($email, $name);

            // Also send a copy to you
            $mail->addAddress('huzaifaharis773@gmail.com', 'Qonkar Technologies');

            $mail->Subject = "Thank you for contacting Qonkar Technologies";

            $mail->isHTML(true);
            $mail->Body = "
                <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; color: #333;'>
                    <div style='text-align: center; margin-bottom: 20px;'>
                        <img src='../images/qonkar_logo.png' alt='Qonkar Logo' style='max-width: 200px; height: auto;'>
                    </div>

                    <h2 style='color: #132a13; border-bottom: 2px solid #90a955; padding-bottom: 10px;'>Hello, $name!</h2>

                    <p>Thank you for reaching out to <strong style='color: #132a13;'>Qonkar Technologies</strong>. We have received your message and our team will get back to you shortly.</p>

                    <div style='background-color: #f8f9fa; border: 1px solid #e0e0e0; border-radius: 5px; padding: 15px; margin: 20px 0;'>
                        <h3 style='color: #132a13; margin-top: 0;'>Your Submitted Details</h3>
                        <p><strong>Name:</strong> $name</p>
                        <p><strong>Email:</strong> $email</p>
                        <p><strong>Phone:</strong> $phone</p>
                        <p><strong>Subject:</strong> $subject</p>
                        <p><strong>Budget:</strong> $budget</p>
                        <p><strong>Message:</strong> $message</p>
                    </div>

                    <h3 style='color: #132a13;'>What’s Next?</h3>
                    <ul style='padding-left: 20px;'>
                        <li>Our team will review your request soon</li>
                        <li>Expect a follow-up email or phone call</li>
                        <li>Meanwhile, explore our <a href='https://qonkar.com' style='color: #90a955;'>website</a></li>
                    </ul>

                    <div style='border-top: 1px solid #e0e0e0; padding-top: 20px; font-size: 14px; color: #666;'>
                        <p>Need help? Contact our support team at 
                        <a href='mailto:support@qonkar.com' style='color: #90a955;'>support@qonkar.com</a></p>
                        <p>Best regards,<br>The Qonkar Technologies Team</p>
                    </div>
                </div>";

            $mail->send();

            echo "Thank you, $name! Your message has been received and we’ve sent a confirmation email.";
        } catch (Exception $e) {
            http_response_code(500);
            echo "Mailer error: " . $mail->ErrorInfo;
        } catch (PDOException $e) {
            http_response_code(500);
            echo "Database error: " . $e->getMessage();
        }
    } else {
        http_response_code(400);
        echo "Please fill all required fields.";
    }
}
?>

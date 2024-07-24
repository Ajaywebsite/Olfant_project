<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $emails = $_POST['email'];
    $subject = $_POST['subject'];
    $letter = $_POST['letter'];

    foreach ($emails as $email) {
        sendMailToMultipleRecipients($email, $subject, $letter);
    }
    function sendMailToMultipleRecipients($emailAddresses, $subject, $letter)
    {
        // Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            // Server settings
            // Configure your SMTP settings here

            // Recipients
            $mail->setFrom('ajneshkumarsah@gmail.com', 'Ajnesh');
            foreach ($emailAddresses as $recipientEmail) {
                $mail->addAddress($recipientEmail); // Add each recipient
            }

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = '<h2>This is the HTML message:</h2>
                <p>' . $letter . '</p>
                <p>Regards,</p>
                <p>Ajay kr. Sah</p>';

            if ($mail->send()) {
                echo 'Message has been sent to all recipients.';
            } else {
                echo 'Error sending email. Mailer Error: ' . $mail->ErrorInfo;
            }
        } catch (Exception $e) {
            echo 'Error sending email. Exception: ' . $e->getMessage();
        }
    }
}

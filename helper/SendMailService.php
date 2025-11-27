<?php
require "../includes/config/ConfigMail.php";
require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

class SendMailService
{
    public static function sendMail($toEmail, $toName, $subject, $body)
    {
        try {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->SMTPAuth = true;
            // Load configs from ConfigMail
            $mail->Host       = ConfigMail::mailHost();
            $mail->Port       = ConfigMail::mailPort();
            $mail->Username   = ConfigMail::mailUsername();
            $mail->Password   = ConfigMail::mailPassword();
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            // From
            $mail->setFrom(
                ConfigMail::mailFromAddress(),
                ConfigMail::mailFromName()
            );

            // Recipient
            $mail->addAddress($toEmail, $toName);

            // Message
            $mail->Subject = $subject;
            $mail->Body    = $body;

            return $mail->send();  // returns true or false
        } catch (Exception $e) {
            error_log("Mail Error: " . $e->getMessage());
            return false;
        }
    }
}

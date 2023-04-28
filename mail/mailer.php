<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'SET-SMTP-HOST';
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Port = 465;

$mail->mailer = "smtp";

$mail->Username = 'SET-SMTP-USERNAME';
$mail->Password = 'SET-SMTP-PASSWORD';

// Sender and recipient address
$mail->SetFrom('SET-SENDER-EMAIL', 'SET-SENDER_NAME');
$mail->addAddress('ADD-RECIPIENT-EMAIL', 'ADD-RECIPIENT-NAME');
$mail->addReplyTo('ADD-REPLY-TO-EMAIL', 'ADD-REPLY-TO-NAME');

// Setting the subject and body
$mail->IsHTML(true);
$mail->Subject = "Send email from localhost using PHP";
$mail->Body = 'Hello World!';

if ($mail->send()) {
    echo "Email is sent successfully.";
} else {
    echo "Error in sending an email. Mailer Error: {$mail->ErrorInfo}";
}
?>
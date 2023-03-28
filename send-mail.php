<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
//PHPMailer library is required to send email from localhost
$mail = new PHPMailer(true);

    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'amaharjan.logispark@gmail.com';
    //get password from gmail, follow https://www.getmailbird.com/gmail-app-password/ to generate your app password
    //2 factor authentication should be activated to generate app password
    $mail->Password   = 'ldsktdyksfnintws';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('amaharjan.logispark@gmail.com', 'Anushka');
    $mail->addAddress('amaharjan.logispark@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Subject';
    $mail->Body    = 'This is message body';
    if($mail->send()){
        echo 'mail sent';
    }


?>
<?php

require_once dirname(__DIR__) . '/config/configuration.php';

use PHPMailer\PHPMailer\PHPMailer;
include_once "phpmailer/PHPMailer.php";
include_once "phpmailer/Exception.php";

class Mail
{
    private static $_answer;

    public static function contactForm(string $name, string $email, $phone, string $message)
    {
        try {
            $mail = new PHPMailer(true); // default is without true, we use true when want to use phpmailer exception
            $mail->addAddress('radivoje.pupovac98@gmail.com');
            $mail->setFrom($email, $email);
            $mail->Subject = "Contact Form";
            $mail->isHTML(true);
            $mail->Body = $message;
            $mail->send();
        } catch (phpmailerException $e) {
            echo $e->errorMessage();
        }
    }

    public static function getAnswer()
    {
        return self::$_answer;
    }
}

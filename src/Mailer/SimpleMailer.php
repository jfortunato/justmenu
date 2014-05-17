<?php namespace JustMenu\Mailer;

class SimpleMailer implements MailerInterface
{
    public function send($to, $subject, $message)
    {
        mail($to, $subject, $message);
    }
}

<?php namespace JustMenu\Mailer;

class SimpleMailer implements MailerInterface
{
    public function send($to, $from, $subject, $message)
    {
        mail($to, $subject, $message);
    }
}

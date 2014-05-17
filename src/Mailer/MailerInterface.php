<?php namespace JustMenu\Mailer;

interface MailerInterface
{
    public function send($to, $subject, $message);
}

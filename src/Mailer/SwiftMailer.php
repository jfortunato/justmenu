<?php

namespace JustMenu\Mailer;

class SwiftMailer implements MailerInterface
{
    public function send($to, $from, $subject, $message)
    {
        // Create the Transport
        $transport = \Swift_SmtpTransport::newInstance('smtp.mandrillapp.com', 587)
            ->setUsername('jfortunato25@gmail.com')
            ->setPassword('6dYwo4DdBL_6Na1tCsCheg');

        $message = \Swift_Message::newInstance()
            ->setSubject($subject)
            ->setFrom($from)
            ->setTo($to)
            ->setBody($message, 'text/html');

        // Send the email
        $mailer = \Swift_Mailer::newInstance($transport);
        $mailer->send($message);
    }
}

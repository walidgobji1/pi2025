<?php
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class EmailService
{
    private MailerInterface $mailer;
    private UrlGeneratorInterface $router;

    public function __construct(MailerInterface $mailer, UrlGeneratorInterface $router)
    {
        $this->mailer = $mailer;
        $this->router = $router;
    }

    public function sendNotificationEmail(string $to, string $subject, string $content): void
    {
        $email = (new Email())
            ->from('noreply@yourdomain.com') // Changez l'adresse de l'expéditeur
            ->to($to)
            ->subject($subject)
            ->html($content);

        $this->mailer->send($email);
    }
}
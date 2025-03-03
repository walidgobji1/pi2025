<?php
<<<<<<< HEAD
// src/Service/EmailService.php
=======
>>>>>>> 8611b6e672bfc92a3280990b1971f5e769fb70aa
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
<<<<<<< HEAD

class EmailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmail($to, $subject, $body)
    {
        $email = (new Email())
            ->from('gobjiwalid1@gmail.com') // Remplacez par votre adresse email
            ->to($to)
            ->subject($subject)
            ->html($body);

        $this->mailer->send($email);
    }
}
=======
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
>>>>>>> 8611b6e672bfc92a3280990b1971f5e769fb70aa

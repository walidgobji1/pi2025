<?php

namespace App\Form;

use App\Entity\Notification;
use App\Entity\Evenement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints as Assert;

class NotificationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', null, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez ajouter un titre.',
                    ]),
                    new Assert\Length([
                        'min' => 5,
                        'max' => 100,
                        'minMessage' => 'Le titre doit contenir au moins 4 caractères.',
                        'maxMessage' => 'Le titre ne peut pas dépasser 20 caractères.',
                    ]),
                ],
            ])
            ->add('contenu', null, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez ajouter un contenu.',
                    ])
                ],
            ])
            ->add('sentAt', DateType::class, [
                'widget' => 'single_text',
                'data' => new \DateTime(), // Set default date to today
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez sélectionner une date.',
                    ])
                ],
            ])
            ->add('evenement', EntityType::class, [
                'class' => Evenement::class,
                'choice_label' => 'titre',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez sélectionner un événement.',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Notification::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints as Assert;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'constraints' => [new NotBlank()],
                'attr' => ['class' => 'form-control'],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'constraints' => [new NotBlank()],
                'attr' => ['class' => 'form-control'],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'constraints' => [new NotBlank()],
                'attr' => ['class' => 'form-control'],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'mapped' => true,  // ✅ Now it's stored in the DB
                'constraints' => [
                    new Assert\NotBlank(message: "Le mot de passe est obligatoire."),
                    new Assert\Length(min: 6, max: 30, minMessage: "Le mot de passe doit contenir au moins 6 caractères.")
                ],
                'attr' => ['class' => 'form-control'],
            ])
            
            ->add('date_de_naissance', DateType::class, [
                'label' => 'Date de naissance',
                'widget' => 'single_text',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

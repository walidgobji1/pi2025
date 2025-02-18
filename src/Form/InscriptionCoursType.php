<?php

namespace App\Form;

use App\Entity\Apprenant;
use App\Entity\Formation;
use App\Entity\InscriptionCours;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionCoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $formation = $options['formation'] ?? null;

        $builder
        ->add('typePaiement', ChoiceType::class, [
            'label' => "Type de paiement",
            'choices' => [
                'Choisir un type de paiement' => '',  
                'Carte' => 'Carte',
                'Virement' => 'Virement',
                'PayPal' => 'Paypal',
            ],
            'placeholder' => 'Choisir un type de paiement',
            'expanded' => false,
            'multiple' => false,
            'empty_data' => null,
            'required' => false, // Suppression du required
        ])
        ->add('nomApprenant', TextType::class, [
            'label' => "Nom de l'apprenant",
            'attr' => ['class' => 'form-control'],
            'required' => false, // Suppression du required
        ])
        ->add('email', EmailType::class, [
            'label' => "Email",
            'attr' => ['placeholder' => 'Votre Email', 'class' => 'form-control'],
            'required' => false, // Suppression du required
        ])
        ->add('cin', TextType::class, [
            'label' => "CIN",
            'attr' => ['placeholder' => 'Votre CIN', 'class' => 'form-control'],
            'required' => false, // Suppression du required
        ])
        ->add('apprenant', EntityType::class, [
            'class' => Apprenant::class,
            'choice_label' => 'id',
            'label' => "Sélectionner un apprenant",
            'required' => false, // Suppression du required
        ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => InscriptionCours::class,
            'formation' => null,
        ]);
    }
}

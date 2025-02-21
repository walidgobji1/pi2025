<?php

namespace App\Form;

use App\Entity\Promotion;
use App\Entity\Apprenant;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\InscriptionCours;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PromotionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('codePromo', TextType::class, [
                'label' => 'Code Promo',
                'required' => false
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'required' => false
            ])
            ->add('remise', NumberType::class, [
                'label' => 'Remise (%)',
                'required' => false
            ])
            ->add('inscriptionCours', EntityType::class, [
                'class' => InscriptionCours::class,
                'choice_label' => 'id', // Remplace par le champ à afficher
                'placeholder' => 'Sélectionnez une inscription',
                'required' => false, // Mettre false si facultatif
            ])
            ->add('dateExpiration', DateTimeType::class, [
                'label' => 'Date d’expiration',
                'widget' => 'single_text',
                'required' => false, // Permet à la date d'être vide
                'empty_data' => null, // Si aucun champ n'est rempli, la valeur sera `null`
            ])
            ->add('apprenant', EntityType::class, [
                'class' => Apprenant::class,
                'choice_label' => 'id', // Affiche l'ID de l'apprenant dans le select
                'label' => 'Apprenant (ayant deux inscriptions payées)',
                'required' => false,
                'placeholder' => 'Sélectionnez un apprenant',
            ]);

    
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promotion::class,
        ]);
    }
}

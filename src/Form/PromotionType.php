<?php

namespace App\Form;

use App\Entity\Promotion;
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
                'required' => true
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'required' => true
            ])
            ->add('remise', NumberType::class, [
                'label' => 'Remise (%)',
                'required' => true
            ])
            ->add('inscriptionCours', EntityType::class, [
                'class' => InscriptionCours::class,
                'choice_label' => 'id', // Remplace par le champ à afficher
                'placeholder' => 'Sélectionnez une inscription',
                'required' => true, // Mettre false si facultatif
            ])
            ->add('dateExpiration', DateTimeType::class, [
                'label' => 'Date d’expiration',
                'widget' => 'single_text',
                'required' => true
            ]);

    
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promotion::class,
        ]);
    }
}

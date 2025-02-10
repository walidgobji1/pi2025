<?php

namespace App\Form;

use App\Entity\Apprenant;
use App\Entity\Formation;
use App\Entity\InscriptionCours;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionCoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('status')
            ->add('dateInscreption', null, [
                'widget' => 'single_text',
            ])
            ->add('montant')
            ->add('typePaiement')
            ->add('nomApprenant')
            ->add('nomFormation')
            ->add('apprenant', EntityType::class, [
                'class' => Apprenant::class,
                'choice_label' => 'id',
            ])
            ->add('formation', EntityType::class, [
                'class' => Formation::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => InscriptionCours::class,
        ]);
    }
}

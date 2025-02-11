<?php

namespace App\Form;

use App\Entity\Apprenant;
use App\Entity\Avis;
use App\Entity\Formation;
use App\Entity\FormationScore;
use App\Entity\Instructeur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('note')
            ->add('commentaire')
            ->add('dateCreation', null, [
                'widget' => 'single_text',
            ])
            ->add('updateDate', null, [
                'widget' => 'single_text',
            ])
            ->add('formationScore', EntityType::class, [
                'class' => FormationScore::class,
                'choice_label' => 'id',
            ])
            ->add('instructeur', EntityType::class, [
                'class' => Instructeur::class,
                'choice_label' => 'id',
            ])
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
            'data_class' => Avis::class,
        ]);
    }
}

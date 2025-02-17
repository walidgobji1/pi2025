<?php

namespace App\Form;

use App\Entity\Formation;
use App\Entity\Lecon;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
class LeconType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('contenu', TextareaType::class, [
                'attr' => ['rows' => 10, 'cols' => 40]  // You can adjust the number of rows and columns as needed
            ])
            ->add('dateCreation', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'data' => new \DateTime(), // Set default value to today's date
                'required' => true,
                'attr' => ['placeholder' => 'AAAA-MM-JJ']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lecon::class,
        ]);
    }
}

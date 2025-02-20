<?php

namespace App\Form;

use App\Entity\Avis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // Note field with validation constraints (Assert)
            ->add('note', ChoiceType::class, [
                'label' => false, // No default label
                'required' => true, // This is required
                'attr' => [
                    'class' => 'rating-input',
                ],
                'expanded' => true, // Display choices as clickable radio buttons
                'multiple' => false,
                'choices' => [
                    '★' => 1,
                    '★★' => 2,
                    '★★★' => 3,
                    '★★★★' => 4,
                    '★★★★★' => 5,
                ],
               'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez ajouter un note.',
                    ]),
                ],
                
            ])
            // Commentaire field with validation constraints (Assert)
            ->add('commentaire', TextareaType::class, [
                'label' => 'Commentaire',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez ajouter un commentaire.',
                    ]),
                    new Assert\Length([
                        'min' => 10,
                        'minMessage' => 'Le commentaire doit comporter au moins {{ limit }} caractères.',
                        'max' => 1000,
                        'maxMessage' => 'Le commentaire ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control commentaire',
                    'rows' => 5
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
            'csrf_protection' => true,
        ]);
    }
}

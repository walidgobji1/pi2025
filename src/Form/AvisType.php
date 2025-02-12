<?php

// src/Form/AvisType.php

namespace App\Form;

use App\Entity\Avis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
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
            ->add('note', IntegerType::class, [
                'label' => 'Note',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez donner une note.',
                    ]),
                    new Assert\Range([
                        'min' => 1,
                        'max' => 5,
                        'notInRangeMessage' => 'La note doit être entre {{ min }} et {{ max }}.',
                    ]),
                ],
                'attr' => [
                    'class' => 'note-field',
                    'placeholder' => 'Note (1-5)',
                    'min' => 1,
                    'max' => 5,
                    'step' => 1,
                ]
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
                    'placeholder' => 'Laissez un commentaire...',
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



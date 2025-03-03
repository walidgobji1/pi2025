<?php

namespace App\Form;

use App\Entity\Formation;
use App\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Vich\UploaderBundle\Form\Type\VichFileType;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir un titre']),
                    new Assert\Length([
                        'min' => 5,
                        'max' => 100,
                        'minMessage' => "Le titre doit contenir au moins {{ limit }} caractères",
                        'maxMessage' => "Le titre ne doit pas dépasser {{ limit }} caractères"
                    ]),
                ],
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez introduire la description']),
                    new Assert\Length([
                        'min' => 10,
                        'max' => 500,
                        'minMessage' => "La description doit contenir au moins {{ limit }} caractères",
                        'maxMessage' => "La description ne doit pas dépasser {{ limit }} caractères"
                    ]),
                ],
            ])
            ->add('duree', TextType::class, [
                'label' => 'Durée',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez introduire la durée de la formation']),
                    new Assert\Regex([
                        'pattern' => "/^\d+\s*(jours|semaines|mois|ans)$/i",
                        'message' => "La durée doit être un nombre suivi d'une unité (jours, semaines, mois, ans)"
                    ]),
                ],
            ])
            ->add('niveau', ChoiceType::class, [
                'label' => 'Niveau',
                'choices' => [
                    'Débutant' => 'Débutant',
                    'Intermédiaire' => 'Intermédiaire',
                    'Avancé' => 'Avancé',
                ],
                'placeholder' => 'Choisir un niveau',
                'attr' => ['class' => 'form-select'], // Bootstrap styling
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir un niveau']),
                ],
            ])
            ->add('dateCreation', DateType::class, [
                'label' => 'Date de création',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'data' => new \DateTime(), // Set default value to today's date
                'required' => true,
                'attr' => ['class' => 'form-control', 'placeholder' => 'AAAA-MM-JJ'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez introduire la date']),
                    new Assert\LessThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date de création ne peut pas être dans le futur'
                    ]),
                ],
            ])
            ->add('prix', MoneyType::class, [
                'label' => 'Prix',
                'currency' => 'TND', // Devise tunisienne
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez introduire le prix']),
                    new Assert\Positive(['message' => 'Le prix doit être un nombre positif']),
                    new Assert\GreaterThan([
                        'value' => 10,
                        'message' => 'Le prix doit être supérieur à 10DT'
                    ]),
                ],
            ])
            ->add('categorie', EntityType::class, [
                'label' => 'Catégorie',
                'class' => Categorie::class,
                'choice_label' => 'nom',
                'placeholder' => 'Sélectionnez une catégorie',
                'required' => true, 
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotNull(['message' => 'La catégorie est obligatoire.']),
                ],    
            
            ])
         
            ->add('imageFile', VichFileType::class, [
                'label' => 'Image de la formation',
                'attr' => ['class' => 'form_label mt-4'],
            ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}

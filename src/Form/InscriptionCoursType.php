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
                    'Carte' => 'Carte',
                    'Virement' => 'Virement',
                    'PayPal' => 'Paypal',
                ],
            ])
            ->add('nomApprenant', TextType::class, [
                'label' => "Nom de l'apprenant",
                'attr' => ['class' => 'form-control'],
            ])
            ->add('nomFormation', HiddenType::class, [
                'data' => $formation ? $formation->getTitre() : '', // Assigner le titre de la formation par défaut
                'mapped' => false, // Si ce champ n'est pas mappé à l'entité InscriptionCours

            ])
            // Ajouter d'autres champs si nécessaire
            ->add('email', EmailType::class, [
                'label' => "Email",
                'attr' => ['placeholder' => 'Votre Email', 'class' => 'form-control'],
            ])
            ->add('cin', TextType::class, [
                'label' => "CIN",
                'attr' => ['placeholder' => 'Votre CIN', 'class' => 'form-control'],
            ])
            ->add('status', HiddenType::class, [
                'data' => 'en attente', 
                'empty_data' => 'en attente', 
            ])
            ->add('montant', HiddenType::class, [
                'data' => 0.0, 
                'mapped' => true, 
                'empty_data' => '0', 
            ])
            ->add('dateInscreption', HiddenType::class, [
                'data' => (new \DateTimeImmutable())->format('Y-m-d H:i:s'), // Date actuelle formatée
                'mapped' => false, // Cela signifie que ce champ ne sera pas mappé à la base de données automatiquement
            ])
            ->add('apprenant', EntityType::class, [
                'class' => Apprenant::class,
                'choice_label' => 'id',
                'label' => "Sélectionner un apprenant",
            ])
            ->add('formation', HiddenType::class, [
                'data' => $options['formation'] ? $options['formation']->getId() : null, // Vérifier que formation est défini
                'mapped' => false,  // Ne pas mapper ce champ à l'entité InscriptionCours
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

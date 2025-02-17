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
            ->add('nomFormation', TextType::class, [
                'label' => "Nom de la formation",
                'attr' => ['class' => 'form-control'],
            ])
            ->add('email', EmailType::class, [
                'label' => "Email",
                'attr' => ['placeholder' => 'Votre Email', 'class' => 'form-control'],
            ])
            ->add('cin', TextType::class, [
                'label' => "CIN",
                'attr' => ['placeholder' => 'Votre CIN', 'class' => 'form-control'],
            ])
            ->add('status', HiddenType::class, [
                'data' => 'en attente', // Valeur par défaut
                'empty_data' => 'en attente', // Évite que Symfony considère la valeur comme null
            ])
            ->add('montant', HiddenType::class, [
                'data' => 0.0, // ✅ Valeur par défaut en float
                'mapped' => true, // S'assurer que le champ est bien mappé
                'empty_data' => '0', // ✅ Évite que Symfony passe null au setter
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
            ->add('formation', EntityType::class, [
                'class' => Formation::class,
                'choice_label' => 'id',
                'label' => "Sélectionner une formation",
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => InscriptionCours::class,
        ]);
    }
}

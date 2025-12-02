<?php

namespace App\Form;

use App\Entity\Listing;
use App\Entity\Offre;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('listing', EntityType::class, [
                'class' => Listing::class,
                'choice_label' => 'price',
                'placeholder' => 'Sélectionnez une annonce',
                'label' => 'Annonce',
            ])
            ->add('utilisateur', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email',
                'placeholder' => 'Sélectionnez un utilisateur',
                'label' => 'Acheteur',
            ])
            ->add('prixPropose', MoneyType::class, [
                'currency' => 'EUR',
                'label' => 'Prix proposé',
                'divisor' => 1,
            ])
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'En attente' => 'En attente',
                    'Acceptée' => 'Acceptée',
                    'Refusée' => 'Refusée',
                ],
                'label' => 'Statut',
            ])
            ->add('commentaire', TextareaType::class, [
                'required' => false,
                'label' => 'Commentaire',
                'attr' => [
                    'rows' => 4,
                    'placeholder' => 'Entrez un commentaire (optionnel)',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Compte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('sigle',ChoiceType::class,[
                'choices' => [
                    'FCFA BCEAO(XOF)' => 'FCFA',
                    'FCFA BEAC(XAF)' => 'FCFA',
                    'EURO' => 'EUR',
                    'USD' => 'USD',
                    'CAD' => 'CAD',
                ]
            ])
            ->add('coclient')
            ->add('compteDevis')
            ->add('compteBonFournisseur')
            ->add('compteBonPrestataire')
            ->add('compteCaisse')
            ->add('compteLivraison')
            ->add('compteFournisseur')
            ->add('comptePrestataire')
            ->add('compteDecompte')
            ->add('compteReglement')
            ->add('compteMateriel')
            ->add('compteFichier')
            ->add('compteFacture')
            ->add('comptePlanning')
            ->add('compteTache')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Compte::class,
        ]);
    }
}

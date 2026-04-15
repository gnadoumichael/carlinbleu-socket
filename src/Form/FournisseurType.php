<?php

namespace App\Form;

use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $type = $options['type'];

        if ($type === 'article') {
            $builder
                ->add('fournisseur')
                ->add('mobile')
                ->add('adresse')
                ->add('mail');
        }

        if ($type === 'presta') {
            $builder
                ->add('fournisseur')
                ->add('fonction')
                ->add('mobile')
                ->add('adresse')
                ->add('mail');
        }


        if ($type === 'materiel') {
            $builder
                ->add('fournisseur')
                ->add('mobile')
                ->add('adresse')
                ->add('mail')
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class,
            'type' => null
        ]);
    }
}

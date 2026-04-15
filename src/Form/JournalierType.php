<?php

namespace App\Form;

use App\Entity\Intervenant;
use App\Entity\Journalier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JournalierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('noms')
            ->add('fonction')
            ->add('mobile')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Journalier::class,
            'csrf_protection' => true,
            'user' =>null,
        ]);
    }
}

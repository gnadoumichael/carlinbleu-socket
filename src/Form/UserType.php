<?php

namespace App\Form;

use App\Entity\Pays;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $type = $options['type'];
        if ($type === 'update') {
            $builder
                ->add('nom')
                ->add('username')
                ->add('prenoms')
                ->add('adresse')
                ->add('contribuable')
                ->add('societe')
                ->add('contact');
        }
        if ($type === 'sous') {
            $builder
                ->add('nom')
                ->add('username')
                ->add('prenoms')
                ->add('password', PasswordType::class)
                ->add('contact')
                ->add('confirm_passe', PasswordType::class);
        }
        if ($type === 'compte') {
            $builder
                ->add('nom')
                ->add('username')
                ->add('prenoms')
                ->add('password', PasswordType::class)
                ->add('societe')
                ->add('contact')
                ->add('confirm_passe', PasswordType::class);

        }

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'type' => null,
        ]);
    }
}

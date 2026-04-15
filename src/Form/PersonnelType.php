<?php

namespace App\Form;

use App\Entity\Groupe;
use App\Entity\Personnel;
use App\Entity\Service;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonnelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $options['user'];
        $type = $options['type'];
        if ($type === 'person') {
            $builder
                ->add('service', EntityType::class, [
                    'class' => Service::class,
                    'choice_label' => 'service',
                    'placeholder' => 'Veuillez choisir un service svp',
                    'required' => false,
                    'empty_data' => '',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('service')
                            ->where('service.user = :user')
                            ->orderBy('service.service', 'ASC')
                            ->setParameter('user', $user);
                    }
                ])
                ->add('noms')
                ->add('fonction')
                ->add('salaire', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('contrat', ChoiceType::class, [
                    'choices' => [
                        'Aucun' => 'Aucun',
                        'CDI' => 'CDI',
                        'CDD' => 'CDD',
                        'FREELANCE' => 'FREELANCE',
                        'STAGIAIRE' => 'STAGIAIRE',
                        'ESSAI' => 'ESSAI'

                    ]
                ])
                ->add('mail')
                ->add('mail')
                ->add('contact');
        }
        if ($type === 'interne') {
            $builder
                ->add('noms')
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Personnel::class,
            'user' => null,
            'type' =>null
        ]);
    }
}

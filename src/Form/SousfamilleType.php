<?php

namespace App\Form;

use App\Entity\Famille;
use App\Entity\Sousfamille;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SousfamilleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $options['user'];
        $builder
            ->add('sousfamille', TextType::class)
            ->add('famille',EntityType::class,[
                'class' => Famille::class,
                'choice_label' => 'famille',
                'query_builder' => function (EntityRepository $er) use ($user) {
                    return $er->createQueryBuilder('famille')
                        ->where('famille.user = :user')
                        ->AndWhere('famille.corbeille IS NULL')
                        ->orderBy('famille.famille','ASC')
                        ->setParameter('user', $user);
                }
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Sousfamille::class,
            'user' => null
        ]);
    }
}

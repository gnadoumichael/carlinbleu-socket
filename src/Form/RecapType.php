<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Monnaie;
use App\Entity\Recap;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecapType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $options['user'];
        $builder
            ->add('quantite', NumberType::class, [
                'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                'scale' => 2,
                'html5' => true])
            ->add('article', EntityType::class, [
                'class' => Article::class,
                'choice_label' => 'designation',
                'query_builder' => function (EntityRepository $er) use ($user) {
                    return $er->createQueryBuilder('a')
                        ->where('a.user = :user')
                        ->andWhere('a.typear = :vale OR a.typear = :valer')
                        ->orderBy('a.designation', 'ASC')
                        ->setParameter('user', $user)
                        ->setParameter('vale',  1 )
                        ->setParameter('valer',  3 )
                        ;
                },
            ]);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Recap::class,
            'user' =>null,
        ]);
    }
}

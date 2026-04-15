<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Groupe;
use App\Entity\Ligne;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LignType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $devis = $options['devis'];
        $decompte = $options['decompte'];
        $bon = $options['bon'];
        $livraison = $options['livraison'];
        $master = $options['master'];

        if ($bon !== null) {
            $builder
                ->add('reference', TextType::class)
                ->add('code', TextType::class)
                ->add('quantite', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('article', EntityType::class, [
                    'class' => Article::class,
                    'choice_label' => 'designation',
                    'query_builder' => function (EntityRepository $er)  use ($master) {
                        return $er->createQueryBuilder('article')
                            ->where('article.user = :user')
                            ->setParameter('user', $master)
                            ->orderBy('article.designation', 'asc');
                    },
                    'group_by' => 'typear.type',
                ])
                ->add('groupe', EntityType::class, [
                    'class' => Groupe::class,
                    'choice_label' => 'groupe',
                    'placeholder' => 'Aucun groupe',
                    'required' => false,
                    'empty_data' => '',
                    'query_builder' => function (EntityRepository $er) use ($bon) {
                        return $er->createQueryBuilder('groupe')
                            ->where('groupe.bon = :bon')
                            ->setParameter('bon', $bon)
                            ->orderBy('groupe.groupe', 'asc') ;
                    }
                ])
                ->add('remise', TextType::class)
            ;
        }

        if ($livraison !== null) {
            $builder
                ->add('reference', TextType::class)
                ->add('code', TextType::class)
                ->add('quantite', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('article', EntityType::class, [
                    'class' => Article::class,
                    'choice_label' => 'designation',
                    'query_builder' => function (EntityRepository $er)  use ($master) {
                        return $er->createQueryBuilder('article')
                            ->where('article.user = :user')
                            ->setParameter('user', $master)
                            ->orderBy('article.designation', 'asc');
                    },
                    'group_by' => 'typear.type',
                ])
            ;
        }

        if ($devis !== null) {
            $builder
                ->add('reference', TextType::class)
                ->add('code', TextType::class)
                ->add('quantite', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('article', EntityType::class, [
                    'class' => Article::class,
                    'choice_label' => 'designation',
                    'query_builder' => function (EntityRepository $er)  use ($master) {
                        return $er->createQueryBuilder('article')
                            ->where('article.user = :user')
                            ->setParameter('user', $master)
                            ->orderBy('article.designation', 'asc');
                    },
                    'group_by' => 'typear.type',
                ])
                ->add('groupe', EntityType::class, [
                    'class' => Groupe::class,
                    'choice_label' => 'groupe',
                    'placeholder' => 'Aucun groupe',
                    'required' => false,
                    'empty_data' => '',
                    'query_builder' => function (EntityRepository $er) use ($devis) {
                        return $er->createQueryBuilder('groupe')
                            ->where('groupe.devis = :devis')
                            ->setParameter('devis', $devis)
                            ->orderBy('groupe.groupe', 'asc') ;
                    }
                ])
                ->add('remise', TextType::class)
                ->add('zone', TextType::class)
            ;
        }

        if ($decompte !== null) {
            $builder
                ->add('reference', TextType::class)
                ->add('code', TextType::class)
                ->add('quantite', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('article', EntityType::class, [
                    'class' => Article::class,
                    'choice_label' => 'designation',
                    'query_builder' => function (EntityRepository $er)  use ($master) {
                        return $er->createQueryBuilder('article')
                            ->where('article.user = :user')
                            ->setParameter('user', $master)
                            ->orderBy('article.designation', 'asc');
                    },
                    'group_by' => 'typear.type',
                ])
                ->add('groupe', EntityType::class, [
                    'class' => Groupe::class,
                    'choice_label' => 'groupe',
                    'placeholder' => 'Aucun groupe',
                    'required' => false,
                    'empty_data' => '',
                    'query_builder' => function (EntityRepository $er) use ($decompte) {
                        return $er->createQueryBuilder('groupe')
                            ->where('groupe.decompte = :decompte')
                            ->setParameter('decompte', $decompte)
                            ->orderBy('groupe.groupe', 'asc');
                    }
                ])
                ->add('remise', TextType::class)
                ->add('zone', TextType::class)
            ;
        }

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ligne::class,
            'devis' => null,
            'decompte' => null,
            'bon' => null,
            'livraison' => null,
            'master' => null
        ]);
    }
}

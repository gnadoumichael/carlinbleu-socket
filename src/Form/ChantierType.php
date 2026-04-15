<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\Intervenant;
use App\Entity\Personnel;
use App\Entity\Chantier;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ChantierType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $user = $options['user'];
        $chantier = $options['chantier'];

        $type = $options['type'];
        if ($type === 'client') {
            $builder
                ->add('nomchantier', TextType::class)
                ->add('description', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])

                ->add('ddebut',DateType::class,
                       ['format'=>'dd/MM/y H:m:s',
                           'html5' => false,
                        'data'=>new \DateTime('now'),
                           'widget' => 'single_text'])

                ->add('dfin',DateType::class,
                    ['format'=>'dd/MM/y',
                        'html5' => false,
                        'data'=>new \DateTime('now'),
                        'widget' => 'single_text']);
        }
        if ($type === 'chantier') {
            $builder
                ->add('client', EntityType::class, [
                    'class' => Client::class,
                    'choice_label' => 'nomclient',
                    'mapped' => 'id',
                    'query_builder' => static function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('client')
                            ->where('client.user = :user')
                            ->AndWhere('client.corbeille IS NULL')
                            ->AndWhere('client.type IS NULL')
                            ->orderBy('client.nomclient', 'ASC')
                            ->setParameter('user', $user);
                    }
                ])
                ->add('sous', EntityType::class, [
                    'class' => Chantier::class,
                    'placeholder' => 'Aucun',
                    'mapped' => 'id',
                    'choice_label' => 'nomchantier',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('p')
                            ->leftJoin('p.client','c')
                            ->where('p.user = :user')
                            ->AndWhere('p.corbeille IS NULL')
                            ->AndWhere('c.corbeille IS NULL')
                            ->AndWhere('c.type IS NULL')
                            ->AndWhere('p.archiver = :arch')
                            ->orderBy('c.nomclient', 'ASC')
                            ->setParameter('user', $user)
                            ->setParameter('arch', 'non');
                    },
                    'required' => true,
                    'group_by'=>'client.nomclient'
                ])
                ->add('nomchantier')
                ->add('contrat')
                ->add('localisation')
                ->add('description', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ]);

        }
        if ($type === 'etat') {
            $builder
                ->add('client', EntityType::class, [
                    'class' => Client::class,
                    'choice_label' => 'nomclient',
                    'mapped' => 'id',
                    'query_builder' => static function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('client')
                            ->where('client.user = :user')
                            ->AndWhere('client.corbeille IS NULL')
                            ->AndWhere('client.type IS NULL')
                            ->orderBy('client.nomclient', 'ASC')
                            ->setParameter('user', $user);
                    }
                ])
                ->add('sous', EntityType::class, [
                    'class' => Chantier::class,
                    'placeholder' => 'Aucun',
                    'mapped' => 'id',
                    'choice_label' => 'nomchantier',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('p')
                            ->leftJoin('p.client','c')
                            ->where('p.user = :user')
                            ->AndWhere('p.corbeille IS NULL')
                            ->AndWhere('c.type IS NULL')
                            ->AndWhere('p.archiver = :arch')
                            ->orderBy('c.nomclient', 'ASC')
                            ->setParameter('user', $user)
                            ->setParameter('arch', 'non');
                    },
                    'required' => true,
                    'group_by'=>'client.nomclient'
                ])
                ->add('nomchantier')
                ->add('contrat')
                ->add('localisation')
                ->add('description', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('ddebut',DateType::class,
                    ['format'=>'dd/M/yyyy',
                        'html5' => false,
                        'data'=>new \DateTime('now'),
                        'widget' => 'single_text'])
                ->add('dfin',DateType::class,
                    ['format'=>'dd/MM/yyyy',
                        'html5' => false,
                        'data'=>new \DateTime('now'),
                        'widget' => 'single_text']);

        }
        if ($type === 'technique') {
            $builder
                ->add('client', EntityType::class, [
                    'class' => Client::class,
                    'choice_label' => 'nomclient',
                    'mapped' => 'id',
                    'query_builder' => static function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('client')
                            ->where('client.user = :user')
                            ->AndWhere('client.corbeille IS NULL')
                            ->AndWhere('client.type IS NULL')
                            ->orderBy('client.nomclient', 'ASC')
                            ->setParameter('user', $user);
                    }
                ])
                ->add('sous', EntityType::class, [
                    'class' => Chantier::class,
                    'placeholder' => 'Aucun',
                    'mapped' => 'id',
                    'choice_label' => 'nomchantier',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('p')
                            ->leftJoin('p.client','c')
                            ->where('p.user = :user')
                            ->AndWhere('p.corbeille IS NULL')
                            ->AndWhere('c.type IS NULL')
                            ->AndWhere('p.archiver = :arch')
                            ->orderBy('c.nomclient', 'ASC')
                            ->setParameter('user', $user)
                            ->setParameter('arch', 'non');
                    },
                    'required' => true,
                    'group_by'=>'client.nomclient'
                ])
                ->add('nomchantier')
                ->add('contrat')
                ->add('localisation')
                ->add('description', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('ddebut',DateType::class,
                    ['format'=>'dd/M/yyyy',
                        'html5' => false,
                        'data'=>new \DateTime('now'),
                        'widget' => 'single_text'])
                ->add('dfin',DateType::class,
                    ['format'=>'dd/MM/yyyy',
                        'html5' => false,
                        'data'=>new \DateTime('now'),
                        'widget' => 'single_text']);

        }
        if ($type === 'upchantier') {
            $builder
                ->add('client', EntityType::class, [
                    'class' => Client::class,
                    'choice_label' => 'nomclient',
                    'query_builder' => static function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('client')
                            ->where('client.user = :user')
                            ->orderBy('client.nomclient', 'ASC')
                            ->setParameter('user', $user);
                    }
                ])
                ->add('nomchantier')
                ->add('localisation')
                ->add('description', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('ddebut',DateType::class,
                    ['format'=>'dd/M/yyyy',
                        'html5' => false,
                        'data'=>new \DateTime('now'),
                        'widget' => 'single_text'])
                ->add('dfin',DateType::class,
                    ['format'=>'dd/MM/yyyy',
                        'html5' => false,
                        'data'=>new \DateTime('now'),
                        'widget' => 'single_text']);


        }
        if ($type === 'superviseur') {
            $builder
                ->add('nomchantier', EntityType::class, [
                    'class' => Chantier::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'nomchantier',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('p')
                            ->leftJoin('p.client','c')
                            ->where('p.user = :user')
                            ->AndWhere('p.corbeille IS NULL')
                            ->orderBy('c.nomclient', 'ASC')
                            ->setParameter('user', $user);
                    },
                    'required' => true,
                    'group_by'=>'client.nomclient'
                ]);
        }
        if ($type === 'depinterve') {
            $builder
                ->add('sous', EntityType::class, [
                    'class' => Chantier::class,
                    'choice_label' => 'nomchantier',
                    'query_builder' => static function (EntityRepository $er)use ($user) {
                        return $er->createQueryBuilder('p')
                            ->where('p.user = :user')
                            ->andWhere('p.corbeille IS NULL')
                            ->orderBy('p.nomchantier', 'ASC')
                            ->setParameter('user', $user);
                    }
                ])
                ->add('intervenants', EntityType::class, [
                    'class' => Intervenant::class,
                    'choice_label' => 'nom',
                    'multiple'=>true,
                    'query_builder' => static function (EntityRepository $er)use ($chantier) {
                        return $er->createQueryBuilder('p')
                            ->where('p.nomchantier = :nomchantier')
                            ->andWhere('p.corbeille IS NULL')
                            ->orderBy('p.nom', 'ASC')
                            ->setParameter('chantier', $chantier);
                    }
                ]);
        }
        if ($type === 'updchantier') {
            $builder
                ->add('sous', EntityType::class, [
                    'class' => Chantier::class,
                    'placeholder' => 'Aucun',
                    'mapped' => 'id',
                    'choice_label' => 'nomchantier',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('p')
                            ->leftJoin('p.client','c')
                            ->where('p.user = :user')
                            ->AndWhere('p.corbeille IS NULL')
                            ->AndWhere('c.corbeille IS NULL')
                            ->AndWhere('c.type IS NULL')
                            ->AndWhere('p.archiver = :arch')
                            ->orderBy('c.nomclient', 'ASC')
                            ->setParameter('user', $user)
                            ->setParameter('arch', 'non');
                    },
                    'required' => true,
                    'group_by'=>'client.nomclient'
                ])
                ->add('nomchantier')
                ->add('contrat')
                ->add('localisation')
                ->add('description', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ]);

        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Chantier::class,
            'user' => null,
            'chantier' => null,
            'type' => null
        ]);
    }
}

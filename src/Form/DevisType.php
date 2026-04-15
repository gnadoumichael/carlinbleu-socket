<?php

namespace App\Form;


use App\Entity\Devis;
use App\Entity\Monnaie;
use App\Entity\Chantier;
use App\Entity\Personnel;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $type = $options['type'];
        $user = $options['user'];
        if ($type === 'base') {
            $builder
                ->add('basetva');
        }
        if ($type === 'remise') {
            $builder
                ->add('remtht');
        }
        if ($type === 'dupliquer') {
            $builder
                ->add('iddevis');
        }
        if ($type === 'devis') {
            $builder
                ->add('suivie', EntityType::class, [
                    'class' => Personnel::class,
                    'choice_label' => 'noms',
                    'required' => false,
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('i')
                            ->where('i.user = :user')
                            ->andWhere('i.type = :perso')
                            ->andWhere('i.corbeille is NULL')
                            ->setParameter('perso', 'personnelle')
                            ->setParameter('user', $user)
                            ->orderBy('i.noms', 'asc');
                    }
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('validit')
                ->add('conditions', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('tva', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('ptva', ChoiceType::class, [
                    'choices' => [
                        'Tva Facturée' => 'oui',
                        'Tva Non Facturée' => 'non',
                        'Tva Suspendue' => 'susp',
                    ],
                    'attr' => ['class' => 'col-pink'],
                ])
                ->add('aarem', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Remise sur lignes' => 'oui',
                        'Remise sur total HT'=> 'tht'
                    ]
                ])
                ->add('aaref', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('abasetva', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('devreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('modele', ChoiceType::class, [
                    'choices' => [
                        'Modèle 1' => '1',
                        'Modèle 2' => '2',
                        'Modèle 3' => '3',
                    ],
                ])
                ->add('model', ChoiceType::class, [
                    'choices' => [
                        'Avec ligne TVA' => '1',
                        'Sans ligne TVA' => '2',
                    ],
                ])
                ->add('zone', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text']);

        }
        if ($type === 'devischantier') {
            $builder
                ->add('suivie', EntityType::class, [
                    'class' => Personnel::class,
                    'choice_label' => 'noms',
                    'required' => false,
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('i')
                            ->where('i.user = :user')
                            ->andWhere('i.type = :perso')
                            ->andWhere('i.corbeille is NULL')
                            ->setParameter('perso', 'personnelle')
                            ->setParameter('user', $user)
                            ->orderBy('i.noms', 'asc');
                    }
                ])
                ->add('chantier', EntityType::class, [
                    'class' => Chantier::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'nomchantier',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('p')
                            ->leftJoin('p.client','c')
                            ->where('p.user = :user')
                            ->AndWhere('p.corbeille IS NULL')
                            ->AndWhere('p.type IS NULL')
                            ->AndWhere('c.type IS NULL')
                            ->AndWhere('p.client IS NOT NULL')
                            ->AndWhere('c.corbeille IS NULL')
                            ->orderBy('c.nomclient', 'ASC')
                            ->setParameter('user', $user);
                    },
                    'required' => true,
                    'group_by'=>'client.nomclient'
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('validit')
                ->add('conditions', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('tva', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('ptva', ChoiceType::class, [
                    'choices' => [
                        'Tva Facturée' => 'oui',
                        'Tva Non Facturée' => 'non',
                        'Tva Suspendue' => 'susp',
                    ],
                    'attr' => ['class' => 'col-pink'],
                ])
                ->add('aarem', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Remise sur lignes' => 'oui',
                        'Remise sur total HT'=> 'tht'
                    ]
                ])
                ->add('aaref', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('abasetva', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('devreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('modele', ChoiceType::class, [
                    'choices' => [
                        'Modèle 1' => '1',
                        'Modèle 2' => '2',
                        'Modèle 3' => '3',
                    ],
                ])
                ->add('model', ChoiceType::class, [
                    'choices' => [
                        'Avec ligne TVA' => '1',
                        'Sans ligne TVA' => '2',
                    ],
                ])
                ->add('zone', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text']);


        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Devis::class,
            'client' => null,
            'type'=> null,
            'user'=> null
        ]);
    }
}

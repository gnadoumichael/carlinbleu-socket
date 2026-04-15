<?php

namespace App\Form;

use App\Entity\Bon;
use App\Entity\Contact;
use App\Entity\Devis;
use App\Entity\Fournisseur;
use App\Entity\Monnaie;
use App\Entity\Chantier;
use App\Entity\Section;
use Doctrine\DBAL\Types\FloatType;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;

class BonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $chantier = $options['chantier'];
        $type = $options['type'];
        $user = $options['user'];

        if ($type === 'dupliquer') {
            $builder
                ->add('numbon');
        }
        if ($type === 'chantier') {
            $builder
                ->add('fournisseur', EntityType::class, [
                    'class' => Fournisseur::class,
                    'choice_label' => 'fournisseur',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('fournisseurs')
                            ->where('fournisseurs.user = :user')
                            ->AndWhere('fournisseurs.type = :p')
                            ->AndWhere('fournisseurs.corbeille IS NULL')
                            ->orderBy('fournisseurs.fournisseur', 'ASC')
                            ->setParameter('user', $user)
                            ->setParameter('p', 1);
                    }
                ])
                ->add('preparation', EntityType::class, [
                    'class' => Bon::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'numbon',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('bon')
                            ->where('bon.type = :p')
                            ->andWhere('bon.corbeille is NULL')
                            ->andWhere('bon.chantier = :q')
                            ->andWhere('bon.etat = :o')
                            ->orderBy('bon.numbon', 'ASC')
                            ->setParameter('q', $chantier)
                            ->setParameter('p', "prepa")
                            ->setParameter('o', "valide")
                            ;

                    },
                    'required' => false,

                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('aarem', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui',
                    ]
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('aaref', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('bonreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('tva', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('ptva', ChoiceType::class, [
                    'choices' => [
                        'Oui' => 'oui',
                        'Non' => 'non'
                    ]
                ])
                ->add('type', ChoiceType::class, [
                    'choices' => [
                        'Bon de commande' => 'oui',
                        'Bon de retour de commande' => 'non',
                    ]
                ])
                ->add('devis', EntityType::class, [
                    'class' => Devis::class,
                    'choice_label' => 'iddevis',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('devis')
                            ->where('devis.chantier = :chantier')
                            ->andWhere('devis.corbeille is NULL')
                            ->andWhere('devis.etat = :valide')
                            ->setParameter('valide', "valide")
                            ->setParameter('chantier', $chantier)
                            ->orderBy('devis.iddevis', 'asc');
                    }
                ])
                ->add('conditions', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ]);
        }
        if ($type === 'startfournisseur') {
            $builder
                ->add('fournisseur', EntityType::class, [
                    'class' => Fournisseur::class,
                    'choice_label' => 'fournisseur',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('fournisseurs')
                            ->where('fournisseurs.user = :user')
                            ->AndWhere('fournisseurs.type = :p')
                            ->AndWhere('fournisseurs.corbeille IS NULL')
                            ->orderBy('fournisseurs.fournisseur', 'ASC')
                            ->setParameter('user', $user)
                            ->setParameter('p', 1);
                    }
                ])
                ->add('preparation', EntityType::class, [
                    'class' => Bon::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'numbon',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('bon')
                            ->where('bon.type = :p')
                            ->andWhere('bon.corbeille is NULL')
                            ->andWhere('bon.chantier = :q')
                            ->andWhere('bon.etat = :o')
                            ->orderBy('bon.numbon', 'ASC')
                            ->setParameter('q', $chantier)
                            ->setParameter('p', "prepa")
                            ->setParameter('o', "valide")
                            ;

                    },
                    'required' => false,

                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('aarem', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui',
                    ]
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('aaref', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('bonreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('tva', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('ptva', ChoiceType::class, [
                    'choices' => [
                        'Oui' => 'oui',
                        'Non' => 'non'
                    ]
                ])
                ->add('type', ChoiceType::class, [
                    'choices' => [
                        'Bon de commande' => 'oui',
                        'Bon de retour de commande' => 'non',
                    ]
                ])
                ->add('devis', EntityType::class, [
                    'class' => Devis::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'iddevis',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('d')
                            ->leftJoin('d.chantier', 'p')
                            ->leftJoin('d.client', 'c')
                            ->where('d.user = :user')
                            ->AndWhere('d.corbeille IS NULL')
                            ->Andwhere('d.etat = :valide')
                            ->AndWhere('c.corbeille IS NULL')
                            ->AndWhere('c.type IS NULL')
                            ->setParameter('user', $user)
                            ->setParameter('valide', 'valide')
                            ->orderBy('c.nomclient', 'asc');
                    },
                    'required' => true,
                    'group_by' => function ($devis) {
                        return $devis->getClient()->getNomClient() . ' | ' . $devis->getChantier()->getNomChantier();
                    },
                ])
                ->add('conditions', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ]);
        }
        if ($type === 'livraison') {
            $builder
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])

                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('aaref', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('bonreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('tva', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('ptva', ChoiceType::class, [
                    'choices' => [
                        'Oui' => 'oui',
                        'Non' => 'non'
                    ]
                ])
                ->add('devis', EntityType::class, [
                    'class' => Devis::class,
                    'choice_label' => 'iddevis',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('devis')
                            ->where('devis.chantier = :chantier')
                            ->andWhere('devis.corbeille is NULL')
                            ->andWhere('devis.etat = :valide')
                            ->setParameter('valide', "valide")
                            ->setParameter('chantier', $chantier)
                            ->orderBy('devis.iddevis', 'asc');
                    }
                ])
                ->add('conditions', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ]);
        }
        if ($type === 'chantiers') {
            $builder
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('aarem', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui',
                    ]
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('aaref', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('bonreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('tva', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('ptva', ChoiceType::class, [
                    'choices' => [
                        'Oui' => 'oui',
                        'Non' => 'non'
                    ]
                ])
                ->add('type', ChoiceType::class, [
                    'choices' => [
                        'Bon de commande Fournisseur' => 'oui',
                        'Bon de commande Prestataire' => 'pst',
                        'Bon de retour de commande' => 'non',
                    ]
                ])
                ->add('contact', EntityType::class, [
                    'class' => Contact::class,
                    'choice_label' => 'contact',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('contact')
                            ->where('contact.user = :user')
                            ->setParameter('user', $user)
                            ->orderBy('contact.contact', 'asc');
                    },
                    'group_by' => 'client.nomclient'
                ])
                ->add('devis', EntityType::class, [
                    'class' => Devis::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'iddevis',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('d')
                            ->leftJoin('d.chantier', 'p')
                            ->leftJoin('d.client', 'c')
                            ->where('d.user = :user')
                            ->AndWhere('d.corbeille IS NULL')
                            ->Andwhere('d.etat = :valide')
                            ->AndWhere('c.corbeille IS NULL')
                            ->AndWhere('c.type IS NULL')
                            ->setParameter('user', $user)
                            ->setParameter('valide', 'valide')
                            ->orderBy('c.nomclient', 'asc');
                    },
                    'required' => true,
                    'group_by' => function ($devis) {
                        return $devis->getClient()->getNomClient() . ' | ' . $devis->getChantier()->getNomChantier();
                    },
                ])
                ->add('conditions', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ]);
        }
        if ($type === 'prestataire') {
            $builder
                ->add('fournisseur', EntityType::class, [
                    'class' => Fournisseur::class,
                    'choice_label' => 'fournisseur',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('fournisseurs')
                            ->where('fournisseurs.user = :user')
                            ->AndWhere('fournisseurs.type = :p')
                            ->AndWhere('fournisseurs.corbeille is NULL')
                            ->orderBy('fournisseurs.fournisseur', 'ASC')
                            ->setParameter('user', $user)
                            ->setParameter('p', 3);
                    }
                ])
                ->add('chantier', EntityType::class, [
                    'class' => Chantier::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'nomchantier',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('d')
                            ->leftJoin('d.client', 'c')
                            ->where('d.user = :user')
                            ->AndWhere('d.corbeille IS NULL')
                            ->AndWhere('d.type IS NULL')
                            ->AndWhere('c.corbeille IS NULL')
                            ->AndWhere('c.type IS NULL')
                            ->AndWhere('d.client IS NOT NULL')
                            ->setParameter('user', $user)
                            ->orderBy('c.nomclient', 'asc');
                    },
                    'required' => true,
                    'group_by'=>'client.nomclient'
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('aarem', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui',
                    ]
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('aaref', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('bonreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('tva', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('ptva', ChoiceType::class, [
                    'choices' => [
                        'Oui' => 'oui',
                        'Non' => 'non'
                    ]
                ])
                ->add('conditions', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ]);
        }
        if ($type === 'fournisseur') {
            $builder
                ->add('fournisseur', EntityType::class, [
                    'class' => Fournisseur::class,
                    'choice_label' => 'fournisseur',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('fournisseurs')
                            ->where('fournisseurs.user = :user')
                            ->AndWhere('fournisseurs.type = :p')
                            ->AndWhere('fournisseurs.corbeille IS NULL')
                            ->orderBy('fournisseurs.fournisseur', 'ASC')
                            ->setParameter('user', $user)
                            ->setParameter('p', 1);
                    }
                ])
                ->add('preparation', EntityType::class, [
                    'class' => Bon::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'numbon',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('bon')
                            ->where('bon.type = :p')
                            ->andWhere('bon.corbeille is NULL')
                            ->andWhere('bon.chantier = :q')
                            ->andWhere('bon.etat = :o')
                            ->orderBy('bon.numbon', 'ASC')
                            ->setParameter('q', $chantier)
                            ->setParameter('p', "prepa")
                            ->setParameter('o', "valide")
                            ;
                    },
                    'required' => false,
                ])
                ->add('type', ChoiceType::class, [
                    'choices' => [
                        'BON DE COMMANDE' => 'oui',
                        'BON DE RETOUR DE COMMANDE' => 'non',
                    ]
                ])
                ->add('chantier', EntityType::class, [
                    'class' => Chantier::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'nomchantier',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('d')
                            ->leftJoin('d.client', 'c')
                            ->where('d.user = :user')
                            ->AndWhere('d.corbeille IS NULL')
                            ->AndWhere('d.type IS NULL')
                            ->AndWhere('c.corbeille IS NULL')
                            ->AndWhere('c.type IS NULL')
                            ->AndWhere('d.client IS NOT NULL')
                            ->setParameter('user', $user)
                            ->orderBy('c.nomclient', 'asc');
                    },
                    'required' => true,
                    'group_by'=>'client.nomclient'
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('aarem', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui',
                    ]
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('aaref', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('bonreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('tva', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('ptva', ChoiceType::class, [
                    'choices' => [
                        'Oui' => 'oui',
                        'Non' => 'non'
                    ]
                ])
                ->add('conditions', CKEditorType::class,
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
            ;
        }
        if ($type === 'preparation') {
            $builder
                ->add('conditions', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('ptva', ChoiceType::class, [
                    'choices' => [
                        'Oui' => 'oui',
                        'Non' => 'non'
                    ]
                ])
                ->add('devis', EntityType::class, [
                    'class' => Devis::class,
                    'choice_label' => 'iddevis',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('devis')
                            ->where('devis.chantier = :chantier')
                            ->andWhere('devis.corbeille is NULL')
                            ->setParameter('chantier', $chantier)
                            ->orderBy('devis.iddevis', 'asc');
                    }
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('aarem', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui',
                    ]
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('aaref', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('bonreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('tva', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
            ;
        }
        if ($type === 'prestchantier') {
            $builder
                ->add('fournisseur', EntityType::class, [
                    'class' => Fournisseur::class,
                    'choice_label' => 'fournisseur',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('fournisseurs')
                            ->where('fournisseurs.user = :user')
                            ->AndWhere('fournisseurs.type = :p')
                            ->AndWhere('fournisseurs.corbeille is NULL')
                            ->orderBy('fournisseurs.fournisseur', 'ASC')
                            ->setParameter('user', $user)
                            ->setParameter('p', 3);
                    }
                ])
                ->add('devis', EntityType::class, [
                    'class' => Devis::class,
                    'choice_label' => 'iddevis',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('devis')
                            ->where('devis.chantier = :chantier')
                            ->andWhere('devis.corbeille is NULL')
                            ->andWhere('devis.etat = :valide')
                            ->setParameter('valide', "valide")
                            ->setParameter('chantier', $chantier)
                            ->orderBy('devis.iddevis', 'asc');
                    }
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('aarem', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui',
                    ]
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('aaref', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('bonreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('tva', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('ptva', ChoiceType::class, [
                    'choices' => [
                        'Oui' => 'oui',
                        'Non' => 'non'
                    ]
                ])
                ->add('conditions', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ]);
        }
        if ($type === 'startprestataire') {
            $builder
                ->add('fournisseur', EntityType::class, [
                    'class' => Fournisseur::class,
                    'choice_label' => 'fournisseur',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('fournisseurs')
                            ->where('fournisseurs.user = :user')
                            ->AndWhere('fournisseurs.type = :p')
                            ->AndWhere('fournisseurs.corbeille is NULL')
                            ->orderBy('fournisseurs.fournisseur', 'ASC')
                            ->setParameter('user', $user)
                            ->setParameter('p', 3);
                    }
                ])
                ->add('devis', EntityType::class, [
                    'class' => Devis::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'iddevis',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('d')
                            ->leftJoin('d.chantier', 'p')
                            ->leftJoin('d.client', 'c')
                            ->where('d.user = :user')
                            ->AndWhere('d.corbeille IS NULL')
                            ->Andwhere('d.etat = :valide')
                            ->AndWhere('c.corbeille IS NULL')
                            ->AndWhere('c.type IS NULL')
                            ->setParameter('user', $user)
                            ->setParameter('valide', 'valide')
                            ->orderBy('c.nomclient', 'asc');
                    },
                    'required' => true,
                    'group_by' => function ($devis) {
                        return $devis->getClient()->getNomClient() . ' | ' . $devis->getChantier()->getNomChantier();
                    },
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('aarem', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui',
                    ]
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('aaref', ChoiceType::class, [
                    'choices' => [
                        'Non' => 'non',
                        'Oui' => 'oui'
                    ]
                ])
                ->add('bonreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('tva', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('ptva', ChoiceType::class, [
                    'choices' => [
                        'Oui' => 'oui',
                        'Non' => 'non'
                    ]
                ])
                ->add('conditions', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Bon::class,
            'client' => null,
            'chantier' => null,
            'type' => null,
            'user' => null
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Caisse;
use App\Entity\Contact;
use App\Entity\Devis;
use App\Entity\Fournisseur;
use App\Entity\Intervenant;
use App\Entity\Ligne;
use App\Entity\Monnaie;
use App\Entity\Paie;
use App\Entity\Chantier;
use App\Entity\Personnel;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CaisseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $chantier = $options['chantier'];
        $user = $options['user'];
        $type = $options['type'];

        if ($type === 'reglement') {
            $builder
                ->add('paie', EntityType::class, [
                    'class' => Paie::class,
                    'choice_label' => 'libelle',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('paie')
                            ->where('paie.user = :user')
                            ->andWhere('paie.corbeille is NULL')
                            ->setParameter('user', $user)
                            ->orderBy('paie.libelle', 'desc');
                    }
                ])
                ->add('fournisseur', EntityType::class, [
                    'class' => Fournisseur::class,
                    'choice_label' => 'fournisseur',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('i')
                            ->where('i.corbeille is NULL')
                            ->Andwhere('i.user = :user')
                            ->setParameter('user', $user)
                            ->orderBy('i.fournisseur', 'asc');
                    },
                    'required' => true,
                    'group_by' => function ($fournisseur) {
                        if ($fournisseur->getType() === 1 || $fournisseur->getType() === 2) {
                            return 'Fournisseurs d\'article';
                        }
                        if ($fournisseur->getType() === 3) {
                            return 'Prestataires';
                        }
                        return null;
                    },
                ]);
        }
        if ($type === 'chantier') {
            $builder
                ->add('montant', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('devis', EntityType::class, [
                    'class' => Devis::class,
                    'choice_label' => 'iddevis',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('devis')
                            ->where('devis.chantier = :chantier')
                            ->andWhere('devis.corbeille is NULL')
                            ->andWhere('devis.type is NULL')
                            ->setParameter('chantier', $chantier)
                            ->orderBy('devis.iddevis', 'asc');
                    }
                ])
                ->add('paie', EntityType::class, [
                    'class' => Paie::class,
                    'choice_label' => 'libelle',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('paie')
                            ->where('paie.user = :user')
                            ->andWhere('paie.corbeille is NULL')
                            ->setParameter('user', $user)
                            ->orderBy('paie.libelle', 'desc');
                    }
                ])
                ->add('moyen', ChoiceType::class, [
                    'choices' => [
                        'Autre' => 'autre',
                        'Chèque' => 'Chèque',
                        'Paiement Mobile' => 'Paiement Mobile',
                        'Espèces' => 'Espèces',
                        'Carte Bancaire' => 'Carte Bancaire',
                        'Virement' => 'Virement',
                        'Prélèvement' => 'Prélèvement',
                        'LCR' => 'LCR',
                        'Virement international' => 'Virement international',
                        'Lettre de change' => 'Lettre de change',
                    ]
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/Y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('caissereference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('operation', ChoiceType::class, [
                    'choices' => [
                        'Sortie de caisse' => 'debit',
                        'Entrée de caisse' => 'credit'
                    ],
                ]);
        }
        if ($type === 'montant') {
            $builder
                ->add('montant', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true]);
        }
        if ($type === 'chantiers') {
            $builder
                ->add('moyen', ChoiceType::class, [
                    'choices' => [
                        'Autre' => 'autre',
                        'Chèque' => 'Chèque',
                        'Paiement Mobile' => 'Paiement Mobile',
                        'Espèces' => 'Espèces',
                        'Carte Bancaire' => 'Carte Bancaire',
                        'Virement' => 'Virement',
                        'Prélèvement' => 'Prélèvement',
                        'LCR' => 'LCR',
                        'Virement international' => 'Virement international',
                        'Lettre de change' => 'Lettre de change',
                    ]
                ])
                ->add('devis', EntityType::class, [
                    'class' => Devis::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'iddevis',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('d')
                            ->leftJoin('d.chantier', 'p')
                            ->where('d.user = :user')
                            ->AndWhere('d.corbeille IS NULL')
                            ->AndWhere('d.etat = :valide')
                            ->andWhere('d.type is NULL')
                            ->setParameter('valide', 'valide')
                            ->setParameter('user', $user)
                            ->orderBy('p.nomchantier', 'asc');
                    },
                    'required' => true,
                    'group_by' => 'chantier.nomchantier'
                ])
                ->add('paie', EntityType::class, [
                    'class' => Paie::class,
                    'choice_label' => 'libelle',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('paie')
                            ->where('paie.user = :user')
                            ->andWhere('paie.corbeille is NULL')
                            ->setParameter('user', $user)
                            ->orderBy('paie.libelle', 'desc');
                    }
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('date', DateType::class,
                    ['format' => 'd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('caissereference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('intervenant', EntityType::class, [
                    'class' => Intervenant::class,
                    'choice_label' => 'nom',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('i')
                            ->where('i.user = :user')
                            ->AndWhere('i.corbeille IS NULL')
                            ->setParameter('user', $user)
                            ->orderBy('i.nom', 'asc');
                    },
                    'required' => true,
                    'group_by' => 'chantier.nomchantier'
                ])
                ->add('operation', ChoiceType::class, [
                    'choices' => [
                        'Sortie de caisse' => 'debit',
                        'Entrée de caisse' => 'credit'
                    ],
                ]);
        }
        if ($type === 'start') {
            $builder
                ->add('montant', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
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
                ->add('paie', EntityType::class, [
                    'class' => Paie::class,
                    'choice_label' => 'libelle',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('paie')
                            ->where('paie.user = :user')
                            ->andWhere('paie.corbeille is NULL')
                            ->setParameter('user', $user)
                            ->orderBy('paie.libelle', 'desc');
                    }
                ])
                ->add('moyen', ChoiceType::class, [
                    'choices' => [
                        'Autre' => 'autre',
                        'Chèque' => 'Chèque',
                        'Paiement Mobile' => 'Paiement Mobile',
                        'Espèces' => 'Espèces',
                        'Carte Bancaire' => 'Carte Bancaire',
                        'Virement' => 'Virement',
                        'Prélèvement' => 'Prélèvement',
                        'LCR' => 'LCR',
                        'Virement international' => 'Virement international',
                        'Lettre de change' => 'Lettre de change',
                    ]
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/Y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('caissereference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('operation', ChoiceType::class, [
                    'choices' => [
                        'Sortie de caisse' => 'debit',
                        'Entrée de caisse' => 'credit'
                    ],
                ]);
        }
        if ($type === 'etats') {
            $builder
                ->add('moyen', ChoiceType::class, [
                    'choices' => [
                        'Autre' => 'autre',
                        'Chèque' => 'Chèque',
                        'Paiement Mobile' => 'Paiement Mobile',
                        'Espèces' => 'Espèces',
                        'Carte Bancaire' => 'Carte Bancaire',
                        'Virement' => 'Virement',
                        'Prélèvement' => 'Prélèvement',
                        'LCR' => 'LCR',
                        'Virement international' => 'Virement international',
                        'Lettre de change' => 'Lettre de change',
                    ]
                ])
                ->add('fournisseur', EntityType::class, [
                    'class' => Fournisseur::class,
                    'choice_label' => 'fournisseur',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('i')
                            ->where('i.corbeille is NULL')
                            ->Andwhere('i.user = :user')
                            ->setParameter('user', $user)
                            ->orderBy('i.fournisseur', 'asc');
                    },
                    'required' => true,
                    'group_by' => function ($fournisseur) {
                        if ($fournisseur->getType() === 1 || $fournisseur->getType() === 2) {
                            return 'Fournisseurs d\'article';
                        }
                        if ($fournisseur->getType() === 3) {
                            return 'Prestataires';
                        }
                        return null;
                    },
                ])
                ->add('paie', EntityType::class, [
                    'class' => Paie::class,
                    'choice_label' => 'libelle',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('paie')
                            ->where('paie.user = :user')
                            ->andWhere('paie.corbeille is NULL')
                            ->setParameter('user', $user)
                            ->orderBy('paie.libelle', 'desc');
                    }
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/Y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('caissereference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('operation', ChoiceType::class, [
                    'choices' => [
                        'Sortie de caisse' => 'debit',
                        'Entrée de caisse' => 'credit'
                    ],
                ]);
        }
        if ($type === 'fournisseur') {
            $builder
                ->add('montant', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('moyen', ChoiceType::class, [
                    'choices' => [
                        'Autre' => 'autre',
                        'Chèque' => 'Chèque',
                        'Paiement Mobile' => 'Paiement Mobile',
                        'Espèces' => 'Espèces',
                        'Carte Bancaire' => 'Carte Bancaire',
                        'Virement' => 'Virement',
                        'Prélèvement' => 'Prélèvement',
                        'LCR' => 'LCR',
                        'Virement international' => 'Virement international',
                        'Lettre de change' => 'Lettre de change',
                    ]
                ])
                ->add('fournisseur', EntityType::class, [
                    'class' => Fournisseur::class,
                    'choice_label' => 'fournisseur',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('i')
                            ->where('i.corbeille is NULL')
                            ->Andwhere('i.user = :user')
                            ->Andwhere('i.type = :type')
                            ->setParameter('user', $user)
                            ->setParameter('type', 1)
                            ->orderBy('i.fournisseur', 'asc');
                    },
                    'required' => true,
                ])
                ->add('paie', EntityType::class, [
                    'class' => Paie::class,
                    'choice_label' => 'libelle',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('paie')
                            ->where('paie.user = :user')
                            ->andWhere('paie.corbeille is NULL')
                            ->setParameter('user', $user)
                            ->orderBy('paie.libelle', 'desc');
                    }
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/Y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('caissereference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('desi', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('operation', ChoiceType::class, [
                    'choices' => [
                        'Sortie de caisse' => 'debit',
                        'Entrée de caisse' => 'credit'
                    ],
                ]);
        }
        if ($type === 'prestataire') {
            $builder
                ->add('montant', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('moyen', ChoiceType::class, [
                    'choices' => [
                        'Autre' => 'autre',
                        'Chèque' => 'Chèque',
                        'Paiement Mobile' => 'Paiement Mobile',
                        'Espèces' => 'Espèces',
                        'Carte Bancaire' => 'Carte Bancaire',
                        'Virement' => 'Virement',
                        'Prélèvement' => 'Prélèvement',
                        'LCR' => 'LCR',
                        'Virement international' => 'Virement international',
                        'Lettre de change' => 'Lettre de change',
                    ]
                ])
                ->add('fournisseur', EntityType::class, [
                    'class' => Fournisseur::class,
                    'choice_label' => 'fournisseur',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('i')
                            ->where('i.corbeille is NULL')
                            ->Andwhere('i.user = :user')
                            ->Andwhere('i.type = :type')
                            ->setParameter('user', $user)
                            ->setParameter('type', 3)
                            ->orderBy('i.fournisseur', 'asc');
                    },
                    'required' => true,
                ])
                ->add('paie', EntityType::class, [
                    'class' => Paie::class,
                    'choice_label' => 'libelle',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('paie')
                            ->where('paie.user = :user')
                            ->andWhere('paie.corbeille is NULL')
                            ->setParameter('user', $user)
                            ->orderBy('paie.libelle', 'desc');
                    }
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/Y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('caissereference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('desi', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('operation', ChoiceType::class, [
                    'choices' => [
                        'Sortie de caisse' => 'debit',
                        'Entrée de caisse' => 'credit'
                    ],
                ]);
        }
        if ($type === 'frais') {
            $builder
                ->add('moyen', ChoiceType::class, [
                    'choices' => [
                        'Autre' => 'autre',
                        'Chèque' => 'Chèque',
                        'Paiement Mobile' => 'Paiement Mobile',
                        'Espèces' => 'Espèces',
                        'Carte Bancaire' => 'Carte Bancaire',
                        'Virement' => 'Virement',
                        'Prélèvement' => 'Prélèvement',
                        'LCR' => 'LCR',
                        'Virement international' => 'Virement international',
                        'Lettre de change' => 'Lettre de change',
                    ]
                ])
                ->add('genre', ChoiceType::class, [
                    'choices' => [
                        'AVANCE SUR SALAIRE' => 'avance',
                        'PRÊT INTERNE' => 'pret',
                        'PAIEMENT DE SALAIRE' => 'salaire'
                    ],
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('date', DateType::class,
                    ['format' => 'd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('caissereference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('paie', EntityType::class, [
                    'class' => Paie::class,
                    'choice_label' => 'libelle',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('paie')
                            ->where('paie.user = :user')
                            ->andWhere('paie.corbeille is NULL')
                            ->setParameter('user', $user)
                            ->orderBy('paie.libelle', 'desc');
                    }
                ])
                ->add('personnel', EntityType::class, [
                    'class' => Personnel::class,
                    'choice_label' => 'noms',
                    'placeholder' => 'Faites votre choix',
                    'required' => 'required',
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
                ->add('operation', ChoiceType::class, [
                    'choices' => [
                        'Sortie de caisse' => 'debit',
                        'Entrée de caisse' => 'credit'
                    ],
                ]);
        }
        if ($type === 'startfrais') {
            $builder
                ->add('montant', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('moyen', ChoiceType::class, [
                    'choices' => [
                        'Autre' => 'autre',
                        'Chèque' => 'Chèque',
                        'Paiement Mobile' => 'Paiement Mobile',
                        'Espèces' => 'Espèces',
                        'Carte Bancaire' => 'Carte Bancaire',
                        'Virement' => 'Virement',
                        'Prélèvement' => 'Prélèvement',
                        'LCR' => 'LCR',
                        'Virement international' => 'Virement international',
                        'Lettre de change' => 'Lettre de change',
                    ]
                ])
                ->add('genre', ChoiceType::class, [
                    'choices' => [
                        'Avance sur salaire' => 'avance',
                        'Prêt interne' => 'pret',
                        'Paiement de salaire' => 'salaire'
                    ],
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('date', DateType::class,
                    ['format' => 'd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('caissereference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('desi', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('paie', EntityType::class, [
                    'class' => Paie::class,
                    'choice_label' => 'libelle',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('paie')
                            ->where('paie.user = :user')
                            ->andWhere('paie.corbeille is NULL')
                            ->setParameter('user', $user)
                            ->orderBy('paie.libelle', 'desc');
                    }
                ])
                ->add('personnel', EntityType::class, [
                    'class' => Personnel::class,
                    'choice_label' => 'noms',
                    'placeholder' => 'Faites votre choix',
                    'required' => 'required',
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
                ->add('operation', ChoiceType::class, [
                    'choices' => [
                        'Sortie de caisse' => 'debit',
                        'Entrée de caisse' => 'credit'
                    ],
                ]);
        }
        if ($type === 'interne') {
            $builder
                ->add('montant', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('moyen', ChoiceType::class, [
                    'choices' => [
                        'Autre' => 'autre',
                        'Chèque' => 'Chèque',
                        'Paiement Mobile' => 'Paiement Mobile',
                        'Espèces' => 'Espèces',
                        'Carte Bancaire' => 'Carte Bancaire',
                        'Virement' => 'Virement',
                        'Prélèvement' => 'Prélèvement',
                        'LCR' => 'LCR',
                        'Virement international' => 'Virement international',
                        'Lettre de change' => 'Lettre de change',
                    ]
                ])
                ->add('monnaie', EntityType::class, [
                    'class' => Monnaie::class,
                    'choice_label' => 'libelle'
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/Y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('caissereference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('desi', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('paie', EntityType::class, [
                    'class' => Paie::class,
                    'choice_label' => 'libelle',
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('paie')
                            ->where('paie.user = :user')
                            ->andWhere('paie.corbeille is NULL')
                            ->setParameter('user', $user)
                            ->orderBy('paie.libelle', 'DESC');
                    }
                ])
                ->add('personnel', EntityType::class, [
                    'class' => Personnel::class,
                    'choice_label' => 'noms',
                    'placeholder' => 'Faites votre choix',
                    'required' => 'required',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('i')
                            ->where('i.user = :user')
                            ->andWhere('i.type = :perso')
                            ->andWhere('i.corbeille is NULL')
                            ->setParameter('perso', 'interne')
                            ->setParameter('user', $user)
                            ->orderBy('i.noms', 'asc');
                    }

                ])
                ->add('operation', ChoiceType::class, [
                    'choices' => [
                        'Sortie de caisse' => 'debit',
                        'Entrée de caisse' => 'credit'
                    ],
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Caisse::class,
            'client' => null,
            'chantier' => null,
            'user' => null,
            'type' => null
        ]);
    }
}

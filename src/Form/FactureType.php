<?php

namespace App\Form;

use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Facture;
use Doctrine\DBAL\Types\FloatType;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $chantier = $options['chantier'];
        $type = $options['type'];
        $user = $options['user'];

        if ($type === 'chantier') {
            $builder
                ->add('devis',EntityType::class,[
                    'class' => Devis::class,
                    'choice_label' => 'iddevis',
                    'placeholder' => 'Aucun',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('devis')
                            ->leftJoin('devis.facture', 'fa')
                            ->where('devis.chantier = :chantier')
                            ->andWhere('devis.etat = :valide')
                            ->andWhere('fa.devis is NULL')
                            ->orderBy('devis.iddevis','ASC')
                            ->setParameter('valide', 'valide')
                            ->setParameter('chantier', $chantier);
                    }
                ])
                ->add('decompte',EntityType::class,[
                    'class' => Decompte::class,
                    'choice_label' => function ($decompte) {
                        return $decompte->getNumdecompte(). ' | '.$decompte->getDevis()->getIddevis();
                    },
                    'placeholder' => 'Aucun',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('decompte')
                            ->leftJoin('decompte.facture', 'f')
                            ->where('decompte.chantier = :chantier')
                            ->andWhere('decompte.etat = :valide')
                            ->andWhere('f IS NULL')
                            ->orderBy('decompte.numdecompte','ASC')
                            ->setParameter('valide', 'valide')
                            ->setParameter('chantier', $chantier);
                    }
                ])
                ->add('type',ChoiceType::class,[
                    'placeholder' => 'Aucun',
                    'choices' => [
                        'Facture d\'Acompte'  => 'acompte',
                        'Facture sur Décompte'  => 'decompte',
                        'Facture de Solde'  => 'devis'
                    ]
                ])
                ->add('factreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])

                ->add('date',DateType::class,
                    ['format'=>'dd/MM/y',
                        'html5' => false,
                        'data'=>new \DateTime('now'),
                        'widget' => 'single_text'])
                ->add('information', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
            ;
        }
        if ($type === 'devis') {
            $builder
                ->add('devis',EntityType::class,[
                    'class' => Devis::class,
                    'choice_label' => 'iddevis',
                    'placeholder' => 'Aucun',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('devis')
                            ->leftJoin('devis.facture', 'fa')
                            ->where('devis.chantier = :chantier')
                            ->andWhere('devis.etat = :valide')
                            ->andWhere('fa.devis is NULL')
                            ->orderBy('devis.iddevis','ASC')
                            ->setParameter('valide', 'valide')
                            ->setParameter('chantier', $chantier);
                    }
                ])
                ->add('decompte',EntityType::class,[
                    'class' => Decompte::class,
                    'choice_label' => function ($decompte) {
                        return $decompte->getNumdecompte(). ' | '.$decompte->getDevis()->getIddevis();
                    },
                    'placeholder' => 'Aucun',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('decompte')
                            ->leftJoin('decompte.facture', 'f')
                            ->where('decompte.chantier = :chantier')
                            ->andWhere('decompte.etat = :valide')
                            ->andWhere('f IS NULL')
                            ->orderBy('decompte.numdecompte','ASC')
                            ->setParameter('valide', 'valide')
                            ->setParameter('chantier', $chantier);
                    }
                ])
                ->add('type',ChoiceType::class,[
                    'placeholder' => 'Aucun',
                    'choices' => [
                        'Facture d\'Acompte'  => 'acompte',
                        'Facture sur Décompte'  => 'decompte',
                        'Facture de Solde'  => 'devis'
                    ]
                ])
                ->add('factreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])

                ->add('date',DateType::class,
                    ['format'=>'dd/MM/y',
                        'html5' => false,
                        'data'=>new \DateTime('now'),
                        'widget' => 'single_text'])
                ->add('information', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
            ;
        }
        if ($type === 'chantiers') {
            $builder
                ->add('devis',EntityType::class,[
                    'class' => Devis::class,
                    'choice_label' => function ($devis) {
                        return 'Devis N°: '. $devis->getIddevis().' | Total TTC: '.number_format($devis->getTotalttc(), 2, ',', ' ');
                    },
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('devis')
                            ->leftJoin('devis.chantier', 'ch')
                            ->leftJoin('devis.client', 'cl')
                            ->leftJoin('devis.facture', 'fa')
                            ->where('devis.user = :user')
                            ->andWhere('devis.etat = :valide')
                            ->andWhere('ch.corbeille is NULL')
                            ->andWhere('ch.archiver = :non')
                            ->andWhere('cl.corbeille is NULL')
                            ->andWhere('fa.devis is NULL')
                            ->orderBy('cl.nomclient','ASC')
                            ->setParameter('non', 'non')
                            ->setParameter('valide', 'valide')
                            ->setParameter('user', $user);
                    },
                    'group_by'=> function ($devis) {
                        return $devis->getClient()->getNomClient().' | '.$devis->getChantier()->getNomChantier() ;
                    },
                ])
                ->add('decompte',EntityType::class,[
                    'class' => Decompte::class,
                    'choice_label' => function ($decompte) {
                        return 'DEVIS N° '.$decompte->getDevis()->getIddevis() .' | '.$decompte->getNumdecompte() ;
                    },
                    'placeholder' => 'Faites votre choix',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('decompte')
                            ->leftJoin('decompte.client', 'cl')
                            ->leftJoin('decompte.facture', 'fa')
                            ->leftJoin('decompte.chantier', 'ch')
                            ->where('decompte.user = :user')
                            ->andWhere('decompte.etat = :valide')
                            ->andWhere('ch.archiver = :non')
                            ->andWhere('cl.corbeille is NULL')
                            ->andWhere('fa is NULL')
                            ->andWhere('ch.corbeille is NULL')
                            ->orderBy('ch.nomchantier','ASC')
                            ->setParameter('valide', 'valide')
                            ->setParameter('non', 'non')
                            ->setParameter('user', $user);
                    },
                    'group_by'=> function ($decompte) {
                        return ''.$decompte->getChantier()->getNomchantier() .' | '. $decompte->getClient()->getNomClient();
                    },
                ])
                ->add('type',ChoiceType::class,[
                    'placeholder' => 'Aucun',
                    'choices' => [
                        'Facture d\'Acompte'  => 'acompte',
                        'Facture sur Décompte'  => 'decompte',
                        'Facture de Solde'  => 'devis'
                    ]
                ])
                ->add('factreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('date',DateType::class,
                    ['format'=>'dd/MM/y',
                        'html5' => false,
                        'data'=>new \DateTime('now'),
                        'widget' => 'single_text'])
                ->add('information', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
            ;
        }
        if ($type === 'upd') {
            $builder
                ->add('date',DateType::class,
                    ['format'=>'dd/MM/y',
                        'html5' => false,
                        'widget' => 'single_text'])
                ->add('factreference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('information', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('tva', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('remise', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Facture::class,
            'chantier' => null,
            'user' => null,
            'type' => null
        ]);
    }
}

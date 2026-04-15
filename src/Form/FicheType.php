<?php

namespace App\Form;

use App\Entity\Chantier;
use App\Entity\Fiche;
use App\Entity\Intervenant;
use App\Entity\Journalier;
use App\Entity\Paie;
use App\Entity\User;
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


class FicheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $options['user'];
        $builder
            ->add('date', DateType::class,
                ['format' => 'dd/MM/y',
                    'html5' => false,
                    'widget' => 'single_text'])
            ->add('heure')
            ->add('prix')
            ->add('unite', ChoiceType::class, [
                'choices' => [
                    'HEURE' => 'heure',
                    'JOUR' => 'jour',
                    'SEMAINE' => 'semaine',
                    'MOIS' => 'mois',
                ],
            ])
            ->add('avance')
            ->add('chantier', EntityType::class, [
                'class' => Chantier::class,
                'placeholder' => 'Faites votre choix',
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
            ->add('journalier', EntityType::class, [
                'class' => Journalier::class,
                'choice_label' => 'noms',
                'placeholder' => 'Faites votre choix',
                'query_builder' => function (EntityRepository $er) use ($user) {
                    return $er->createQueryBuilder('i')
                        ->where('i.user = :user')
                        ->setParameter('user', $user)
                        ->orderBy('i.noms', 'asc');
                },
                'required' => true
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fiche::class,
            'user'=> null
        ]);
    }
}

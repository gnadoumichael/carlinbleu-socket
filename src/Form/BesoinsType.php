<?php

namespace App\Form;

use App\Entity\Besoins;
use App\Entity\Chantier;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class BesoinsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $options['user'];
        $builder
            ->add('fichiers', FileType::class, [
                'label' => false,
                'mapped' => false, // Tell that there is no Entity to link
                'required' => true,
                'multiple' => 'multiple',
                'constraints' => [
                    new File([
                        'mimeTypes' => [ // We want to let upload only txt, csv or Excel files
                            'text/x-csv',
                            'text/csv',
                            'text/plain',
                            'application/csv',
                            'application/excel',
                            'application/pdf',
                            'application/zip',
                            'application/rar',
                            'image/gif',
                            'image/jpg',
                            'image/jpeg',
                            'image/png',
                            'image/tiff',
                            'application/msword',
                            'application/vnd.ms-excel',
                            'application/vnd.ms-powerpoint',
                            'application/acad',
                            'application/autocad_dwg',
                            'application/dwg',
                            'application/dxf',
                            'application/x-acad',
                            'application/x-dxf',
                            'drawing/dwg',
                            'image/vnd.dwg',
                            'image/x-dwg',
                            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',

                        ],
                        'mimeTypesMessage' => "This document isn't valid.",
                    ])
                ],
            ])
            ->add('besoin', CKEditorType::class,
                [
                    'config_name' => 'my_config_1',
                ])
            ->add('etat', ChoiceType::class, [
                'choices' => [
                    'À VALIDER' => 'valider',
                    'URGENT' => 'urgent',
                    'RAPPEL' => 'rappel',
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Besoins::class,
            'user' => null
        ]);
    }
}

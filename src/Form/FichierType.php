<?php

namespace App\Form;

use App\Entity\Fichier;
use App\Entity\Chantier;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\File;

class FichierType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $type = $options['type'];
        $user = $options['user'];
        if ($type === 'chantiers') {
            $builder
                ->add('nomfichier', FileType::class, [
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
                ->add('chantier', EntityType::class, [
                    'class' => Chantier::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'nomchantier',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('p')
                            ->leftJoin('p.client','c')
                            ->where('p.user = :user')
                            ->AndWhere('p.corbeille IS NULL')
                            ->AndWhere('c.type IS NULL')
                            ->orderBy('c.nomclient', 'ASC')
                            ->setParameter('user', $user);
                    },
                    'required' => true,
                    'group_by'=>'client.nomclient'
                ]);
        }
        if ($type === 'chantier') {
            $builder
                ->add('nomfichier', FileType::class, [
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
                ]);
        }
        if ($type === 'fiche') {
            $builder
                ->add('nomfichier', FileType::class, [
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
                ->add('categorie');
        }
        if ($type === 'chat') {
            $builder
                ->add('nomfichier', FileType::class, [
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
                                'image/x-autocad',
                                'image/x-dwg',
                                'image/x-dxf',
                                'drawing/dwg',
                                'image/vnd.dwg',
                                'image/x-dwg',
                                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                            ],
                            'mimeTypesMessage' => "This document isn't valid.",
                        ])
                    ],
                ]);
        }
        if ($type === 'fichie') {
            $builder
                ->add('nomfichier', FileType::class, [
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
                ->add('categorie', ChoiceType::class,[
                    'choices' => [
                        'DOCUMENTS' => 'FICHIERS',
                        'IMAGES' => 'IMAGES'
                    ]   ,
                ]);
        }
        if ($type === 'enregistre') {
            $builder
                ->add('nomfichier', FileType::class, [
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
                ->add('categorie', ChoiceType::class,[
                    'choices' => [
                        'CLIENT' => 'client',
                        'CHANTIER' => 'chantier'
                    ]   ,
                ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Fichier::class,
            'type'=> null,
            'user'=> null
        ]);
    }
}

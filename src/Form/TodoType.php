<?php

namespace App\Form;

use App\Entity\Todo;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class TodoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('todo', CKEditorType::class,
                [
                    'config_name' => 'my_config_1',
                ])
            ->add('priorite', ChoiceType::class, [
                'choices' => [
                    'Normale' => '1',
                    'En attente' => '2',
                    'Important' => '3'
                ]
            ])
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

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Todo::class,
        ]);
    }
}

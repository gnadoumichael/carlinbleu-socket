<?php

namespace App\Form;

use App\Entity\Forme;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intituler')
            ->add('typeEntete',ChoiceType::class,[
                'choices' => [
                    'Aucun' => 'Aucun',
                    'Image' => 'image',
                    'Texte' => 'texte',
                ]
            ])
            ->add('typeFooter',ChoiceType::class,[
                'choices' => [
                    'Aucun' => 'Aucun',
                    'Image' => 'image',
                    'Texte' => 'texte',
                ]
            ])
            ->add('dsize')
            ->add('enteteImage', FileType::class, [
                'mapped' => false,
            ])
            ->add('footImage', FileType::class, [
                'mapped' => false,
            ])
            ->add('headerText', CKEditorType::class,
                [
                    'config_name' => 'my_config_1',
                ])
            ->add('teteH')
            ->add('teteY')
            ->add('headerWith')
            ->add('headerHeight')
            ->add('footerHeight')
            ->add('teteDH')
            ->add('teteDB')
            ->add('teteDD')
            ->add('teteDG')
            ->add('decolor')
            ->add('decolortex')
            ->add('piedsize')
            ->add('pied')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Forme::class,
        ]);
    }
}

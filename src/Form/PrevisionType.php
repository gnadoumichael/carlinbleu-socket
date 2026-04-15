<?php

namespace App\Form;

use App\Entity\Prevision;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\DateTime;

class PrevisionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class,
                ['format' => 'dd/MM/y HH:m:s',
                    'html5' => false,
                    'data' => new \DateTime('now'),
                    'widget' => 'single_text'])
            ->add('reference', CKEditorType::class,
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
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prevision::class,
        ]);
    }
}

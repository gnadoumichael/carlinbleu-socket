<?php

namespace App\Form;

use App\Entity\Chantier;
use App\Entity\Decompte;
use App\Entity\Devis;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DecompteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $chantier = $options['chantier'];
        $type = $options['type'];
        $user = $options['user'];
        if ($type === 'chantier') {
            $builder
                ->add('finition', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('trc', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('prorata', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('garantie', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'data' => new \DateTime('now'),
                        'widget' => 'single_text'])
                ->add('deduction', ChoiceType::class, [
                    'choices' => [
                        'Aucune' => 'aucune',
                        'Déduction selon pourcentage d\'avancement' => 'partielle',
                        'Déduire tout l\'acompte de démarrage' => 'complete',
                    ]
                ])
            ;
        }
        if ($type === 'devis') {
            $builder
                ->add('finition', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('trc', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('prorata', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('garantie', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('acompte', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'data' => new \DateTime('now'),
                        'widget' => 'single_text']);
        }
        if ($type === 'chantiers') {
            $builder
                ->add('finition', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('trc', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('prorata', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('garantie', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'data' => new \DateTime('now'),
                        'widget' => 'single_text']);
        }
        if ($type === 'decompte') {
            $builder
                ->add('finition', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('trc', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('prorata', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('garantie', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('acompte', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y',
                        'html5' => false,
                        'data' => new \DateTime('now'),
                        'widget' => 'single_text'])
                ->add('deduction', ChoiceType::class, [
                    'choices' => [
                        'Aucune' => 'aucune',
                        'Déduction selon pourcentage d\'avancement' => 'partielle',
                        'Déduire tout l\'acompte de démarrage' => 'complete',
                    ]
                ])
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Decompte::class,
            'chantier' => null,
            'type' => null,
            'user' => null
        ]);
    }
}

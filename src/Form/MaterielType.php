<?php

namespace App\Form;

use App\Entity\Famille;
use App\Entity\Fournisseur;
use App\Entity\Materiel;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MaterielType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $options['user'];
        $builder
            ->add('materiel')
            ->add('code')
            ->add('stock', NumberType::class, [
                'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                'html5' => true])
            ->add('famille', EntityType::class, [
                'class' => Famille::class,
                'placeholder' => 'Faites votre choix',
                'choice_label' => 'famille',
                'query_builder' => function (EntityRepository $er) use ($user) {
                    return $er->createQueryBuilder('fa')
                        ->where('fa.user = :user')
                        ->andWhere('fa.corbeille is null')
                        ->orderBy('fa.famille', 'ASC')
                        ->setParameter('user', $user);
                }
            ])
            ->add('fournisseur', EntityType::class, [
                'class' => Fournisseur::class,
                'placeholder' => 'Faites votre choix',
                'choice_label' => 'fournisseur',
                'query_builder' => function (EntityRepository $er) use ($user) {
                    return $er->createQueryBuilder('fournisseurs')
                        ->where('fournisseurs.user = :user')
                        ->orderBy('fournisseurs.fournisseur', 'ASC')
                        ->setParameter('user', $user);
                }
            ])
            ->add('date',DateType::class,
                ['format'=>'dd/MM/y HH:m:s',
                    'html5' => false,
                    'data'=>new \DateTime('now'),
                    'widget' => 'single_text'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Materiel::class,
            'user' => null,
        ]);
    }
}

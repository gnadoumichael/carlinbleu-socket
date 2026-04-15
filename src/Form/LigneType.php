<?php

namespace App\Form;

use App\Entity\Contact;
use App\Entity\Groupe;
use App\Entity\Ligne;
use Doctrine\DBAL\Types\DecimalType;
use Doctrine\DBAL\Types\FloatType;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LigneType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $devis = $options['devis'];
        $type = $options['type'];
        $decompte = $options['decompte'];
        $bon = $options['bon'];
        $caisse = $options['caisse'];
        $livraison = $options['livraison'];
        $facture = $options['facture'];

        if ($bon !== null) {
            $builder
                ->add('designation')
                ->add('unite')
                ->add('quantite', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('pu', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('remise', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('reference')
                ->add('groupe', EntityType::class, [
                    'class' => Groupe::class,
                    'choice_label' => 'groupe',
                    'placeholder' => 'Aucun lot',
                    'required' => false,
                    'empty_data' => '',
                    'query_builder' => function (EntityRepository $er) use ($bon) {
                        return $er->createQueryBuilder('groupe')
                            ->where('groupe.bon = :bon')
                            ->setParameter('bon', $bon)
                            ->orderBy('groupe.groupe', 'asc');
                    }
                ]);
        }
        if ($caisse !== null) {
            $builder
                ->add('designation',CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('pu', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true]);
        }
        if ($devis !== null) {
            $builder
                ->add('designation',CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('zone')
                ->add('unite')
                ->add('quantite', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('pu', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('remise', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('reference')
                ->add('groupe', EntityType::class, [
                    'class' => Groupe::class,
                    'choice_label' => 'groupe',
                    'placeholder' => 'Aucun lot',
                    'required' => false,
                    'empty_data' => '',
                    'query_builder' => function (EntityRepository $er) use ($devis) {
                        return $er->createQueryBuilder('groupe')
                            ->where('groupe.devis = :devis')
                            ->setParameter('devis', $devis)
                            ->orderBy('groupe.groupe', 'asc');
                    }
                ]);
        }
        if ($decompte !== null) {
            $builder
                ->add('designation',CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('zone')
                ->add('unite')
                ->add('quantite', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('pu', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('remise', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('reference')
                ->add('groupe', EntityType::class, [
                    'class' => Groupe::class,
                    'choice_label' => 'groupe',
                    'placeholder' => 'Aucun lot',
                    'required' => false,
                    'empty_data' => '',
                    'query_builder' => function (EntityRepository $er) use ($devis) {
                        return $er->createQueryBuilder('groupe')
                            ->where('groupe.devis = :devis')
                            ->setParameter('devis', $devis);
                    }
                ]);
        }
        if ($livraison !== null) {
            $builder
                ->add('designation')
                ->add('unite')
                ->add('quantite', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('reference');
        }
        if ($facture !== null) {
            $builder
                ->add('designation',CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('unite')
                ->add('quantite', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('pu', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('groupe', EntityType::class, [
                    'class' => Groupe::class,
                    'choice_label' => 'groupe',
                    'placeholder' => 'Aucun lot',
                    'required' => false,
                    'empty_data' => '',
                    'query_builder' => function (EntityRepository $er) use ($facture) {
                        return $er->createQueryBuilder('groupe')
                            ->where('groupe.facture = :fac')
                            ->setParameter('fac', $facture)
                            ->orderBy('groupe.groupe', 'asc');
                    }
                ]);
        }
        if ($type === "retenue") {
            $builder
                ->add('remise', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true])
                ->add('designation',CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ])
                ->add('pu', NumberType::class,[
                    'invalid_message'=>'Veuillez entrer une valeur valide svp !',
                    'scale' => 2,
                    'html5' => true]);
        }

    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ligne::class,
            'devis' => null,
            'type' => null,
            'decompte' => null,
            'bon' => null,
            'livraison' => null,
            'caisse' => null,
            'facture' => null
        ]);
    }
}

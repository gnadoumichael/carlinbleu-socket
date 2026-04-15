<?php

namespace App\Form;

use App\Entity\Personnel;
use App\Entity\Planning;
use App\Entity\Chantier;
use App\Entity\Section;
use App\Entity\Tache;
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

class TacheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $chantier = $options['chantier'];
        $type = $options['type'];
        $user = $options['user'];
        if ($type === 'chantier') {
            $builder
                ->add('ordre', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'html5' => true])
                ->add('libelle', CKEditorType::class,
                    ['config_name' => 'my_config_1'])
                ->add('etat', ChoiceType::class, [
                    'choices' => [
                        'À faire' => 'À faire',
                        'En cours' => 'En cours',
                        'Achevé' => 'Achevée',
                        'En attente' => 'En attente',
                    ]
                ])
                ->add('section', EntityType::class, [
                    'class' => Section::class,
                    'choice_label' => 'libelle',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('se')
                            ->where('se.chantier = :chantier')
                            ->andWhere('se.corbeille IS NULL')
                            ->orderBy('se.libelle', 'ASC')
                            ->setParameter('chantier', $chantier);
                    }
                ]);
        }else{
            $builder
                ->add('libelle', CKEditorType::class,
                    ['config_name' => 'my_config_1'])
                ->add('ordre', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'html5' => true])
                ->add('etat', ChoiceType::class, [
                    'choices' => [
                        'À faire' => 'À faire',
                        'En cours' => 'En cours',
                        'Achevé' => 'Achevée',
                        'En attente' => 'En attente',
                    ]
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tache::class,
            'chantier' =>null,
            'user' =>null,
            'type' => null,
        ]);
    }
}

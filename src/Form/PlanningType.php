<?php

namespace App\Form;

use App\Entity\Chantier;
use App\Entity\Planning;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlanningType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $type = $options['type'];
        $user = $options['user'];
        if ($type === 'chantier') {
            $builder
                ->add('rang', NumberType::class, [
                    'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                    'scale' => 0,
                    'html5' => true])
                ->add('planning');
        }else{
            $builder
                ->add('planning')
                ->add('chantier', EntityType::class, [
                    'class' => Chantier::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'nomchantier',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('p')
                            ->leftJoin('p.client','c')
                            ->where('p.user = :user')
                            ->AndWhere('p.archiver <> :ar')
                            ->AndWhere('p.corbeille IS NULL')
                            ->AndWhere('c.corbeille IS NULL')
                            ->AndWhere('c.type IS NULL')
                            ->orderBy('c.nomclient', 'ASC')
                            ->setParameter('ar', 'oui')
                            ->setParameter('user', $user);
                    },
                    'required' => true,
                    'group_by'=>'client.nomclient'
                ])
            ;

        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Planning::class,
            'type' =>null,
            'user' =>null
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Groupe;
use App\Entity\Intervenant;
use App\Entity\Chantier;
use App\Entity\Tache;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IntervenantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $options['user'];
        $type = $options['type'];
        if ($type === 'chantiers') {
            $builder
                ->add('nom')
                ->add('profession')
                ->add('payer', NumberType::class, [
                    'html5' => true,
                ])
               ;
        }
        if ($type === 'charge') {
            $builder
                ->add('nom')
                ->add('payer', NumberType::class, [
                    'html5' => true,
                ])
            ;
        }
        if ($type === 'chantier') {
            $builder
                ->add('nom')
                ->add('profession')
                ->add('payer', NumberType::class, [
                    'html5' => true,
                ])
               ;
        }
        if ($type === 'venant') {
            $builder
                ->add('chantier', EntityType::class, [
                    'class' => Chantier::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'nomchantier',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('p')
                            ->leftJoin('p.client','c')
                            ->where('p.user = :user')
                            ->AndWhere('p.corbeille IS NULL')
                            ->orderBy('c.nomclient', 'ASC')
                            ->setParameter('user', $user);
                    },
                    'required' => true,
                    'group_by'=>'client.nomclient'
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Intervenant::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id'   => 'interv_item',
            'user' =>null,
            'type' =>null
        ]);
    }
}

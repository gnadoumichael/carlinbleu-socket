<?php

namespace App\Form;

use App\Entity\Bon;
use App\Entity\Chantier;
use App\Entity\Contact;
use App\Entity\Devis;
use App\Entity\Intervenant;
use App\Entity\Livraison;
use App\Entity\Personnel;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivraisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $type = $options['type'];
        $user = $options['user'];
        $chantier = $options['chantier'];

        if ($type === 'chantiers') {
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
                            ->AndWhere('p.type IS NULL')
                            ->orderBy('c.nomclient', 'ASC')
                            ->setParameter('user', $user);
                    },
                    'required' => true,
                    'group_by'=>'client.nomclient'
                ])
                ->add('devis', EntityType::class, [
                    'class' => Devis::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'iddevis',
                    'query_builder' => function (EntityRepository $er) use ($user) {
                        return $er->createQueryBuilder('d')
                            ->leftJoin('d.chantier','p')
                            ->where('d.user = :user')
                            ->AndWhere('d.corbeille IS NULL')
                            ->Andwhere('d.etat = :valide')
                            ->orderBy('p.nomchantier', 'ASC')
                            ->setParameter('user', $user)
                            ->setParameter('valide', 'valide');
                    },
                    'required' => true,
                    'group_by'=> function ($devis) {
                        return $devis->getChantier()->getNomChantier().' | '.$devis->getClient()->getNomClient() ;
                    },
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y H:m:s',
                        'html5' => false,
                        'data' => new \DateTime('now'),
                        'widget' => 'single_text'])
                ->add('livrereference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ]);
        }

        if ($type === 'chantier') {
            $builder
                ->add('devis', EntityType::class, [
                    'class' => Devis::class,
                    'placeholder' => 'Faites votre choix',
                    'choice_label' => 'iddevis',
                    'query_builder' => function (EntityRepository $er) use ($chantier) {
                        return $er->createQueryBuilder('d')
                            ->leftJoin('d.chantier','p')
                            ->where('d.chantier = :chantier')
                            ->AndWhere('d.corbeille IS NULL')
                            ->Andwhere('d.etat = :valide')
                            ->orderBy('p.nomchantier', 'ASC')
                            ->setParameter('chantier', $chantier)
                            ->setParameter('valide', 'valide');
                    },
                    'required' => true,
                    'group_by'=> function ($devis) {
                        return $devis->getChantier()->getNomChantier().' | '.$devis->getClient()->getNomClient() ;
                    },
                ])
                ->add('date', DateType::class,
                    ['format' => 'dd/MM/y H:m:s',
                        'html5' => false,
                        'data' => new \DateTime('now'),
                        'widget' => 'single_text'])
                ->add('livrereference', CKEditorType::class,
                    [
                        'config_name' => 'my_config_1',
                    ]);
        }

    }



    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Livraison::class,
            'chantier' => null,
            'user' => null,
            'type' => null,
        ]);
    }
}

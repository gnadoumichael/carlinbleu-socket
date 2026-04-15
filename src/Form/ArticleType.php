<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Biblio;
use App\Entity\Famille;
use App\Entity\Fournisseur;
use App\Entity\Monnaie;
use App\Entity\Sousfamille;
use App\Entity\Typear;
use App\Entity\TypeArticle;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $user = $options['user'];
        $builder
            ->add('designation')
            ->add('unite')
            ->add('stock')
            ->add('pu', NumberType::class, [
                'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                'scale' => 2,
                'html5' => true])
            ->add('reference')
            ->add('monnaies', EntityType::class, [
                'class' => Monnaie::class,
                'choice_label' => 'libelle',
            ])
            ->add('marque')
            ->add('disponibilite', ChoiceType::class, [
                'choices' => [
                    'Disponible' => 'oui',
                    'Non disponible' => 'non',
                ],
            ])

            ->add('famille', EntityType::class, [
                'class' => Famille::class,
                'choice_label' => 'famille',
                'query_builder' => function (EntityRepository $er) use ($user) {
                    return $er->createQueryBuilder('famille')
                        ->where('famille.user = :user')
                        ->orderBy('famille.famille', 'ASC')
                        ->setParameter('user', $user);
                }
            ])
            ->add('fournisseur', EntityType::class, [
                'class' => Fournisseur::class,
                'choice_label' => 'fournisseur',
                'query_builder' => function (EntityRepository $er) use ($user) {
                    return $er->createQueryBuilder('fournisseurs')
                        ->where('fournisseurs.user = :user')
                        ->AndWhere('fournisseurs.type = :val')
                        ->AndWhere('fournisseurs.corbeille IS NULL')
                        ->setParameter('user', $user)
                        ->setParameter('val', 1)
                        ->orderBy('fournisseurs.fournisseur', 'ASC');
                }
            ])
            ->add('typear', EntityType::class, [
                'class' => Typear::class,
                'choice_label' => 'type',
            ])
            ->add('description',CKEditorType::class,
                [
                    'config_name' => 'my_config_1',
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
            'user' => null,
        ]);
    }
}

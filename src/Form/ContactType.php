<?php

namespace App\Form;

use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Contact;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $options['user'];
        $builder
            ->add('client', EntityType::class, [
                'class' => Client::class,
                'choice_label' => 'nomclient',
                'mapped' => 'id',
                'query_builder' => static function (EntityRepository $er) use ($user) {
                    return $er->createQueryBuilder('client')
                        ->where('client.user = :user')
                        ->AndWhere('client.corbeille IS NULL')
                        ->AndWhere('client.type IS NULL')
                        ->orderBy('client.nomclient', 'ASC')
                        ->setParameter('user', $user);
                }
            ])
            ->add('contact')
            ->add('fonction')
            ->add('mail')
            ->add('phone')
            ->add('bureau');

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
            'user' => null,
        ]);
    }
}

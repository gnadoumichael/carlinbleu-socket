<?php

namespace App\Form;

use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Relever;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReleverType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $chantier = $options['chantier'];
        $type = $options['type'];
        $user = $options['user'];
        $client = $options['client'];

        if ($type === 'chantier') {
            $builder
                ->add('montant')
                ->add('moyen', ChoiceType::class, [
                    'choices' => [
                        'Autre' => 'autre',
                        'Chèque' => 'Chèque',
                        'Espèces' => 'Espèces',
                        'Carte Bancaire' => 'Carte Bancaire',
                        'Virement' => 'Virement',
                        'Prélèvement' => 'Prélèvement',
                        'LCR' => 'LCR',
                        'Virement international' => 'Virement international',
                        'Lettre de change' => 'Lettre de change',
                    ]
                ]);
        }
        if ($type === 'client') {
            $builder
                ->add('montant')
                ->add('moyen', ChoiceType::class, [
                    'choices' => [
                        'Autre' => 'autre',
                        'Chèque' => 'Chèque',
                        'Espèces' => 'Espèces',
                        'Carte Bancaire' => 'Carte Bancaire',
                        'Virement' => 'Virement',
                        'Prélèvement' => 'Prélèvement',
                        'LCR' => 'LCR',
                        'Virement international' => 'Virement international',
                        'Lettre de change' => 'Lettre de change',
                    ]
                ]);
        }
        if ($type === 'chantiers') {
            $builder
                ->add('montant')

                ->add('moyen', ChoiceType::class, [
                    'choices' => [
                        'Autre' => 'autre',
                        'Chèque' => 'Chèque',
                        'Espèces' => 'Espèces',
                        'Carte Bancaire' => 'Carte Bancaire',
                        'Virement' => 'Virement',
                        'Prélèvement' => 'Prélèvement',
                        'LCR' => 'LCR',
                        'Virement international' => 'Virement international',
                        'Lettre de change' => 'Lettre de change',
                    ]
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Relever::class,
            'chantier' =>null,
            'client' =>null,
            'user' =>null,
            'type' =>null,
        ]);
    }
}

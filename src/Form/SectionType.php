<?php

namespace App\Form;

use App\Entity\Contact;
use App\Entity\Planning;
use App\Entity\Prevision;
use App\Entity\Section;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SectionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $chantier = $options['chantier'];
        $type = $options['type'];

        if ($type === 'chantier') {
        $builder
            ->add('rang', NumberType::class, [
                'invalid_message' => 'Veuillez entrer une valeur valide svp !',
                'html5' => true])
            ->add('planning',EntityType::class,[
                'class' => Planning::class,
                'choice_label' => 'planning',
                'query_builder' => function (EntityRepository $er) use ($chantier) {
                    return $er->createQueryBuilder('planning')
                        ->where('planning.chantier = :chantier')
                        ->andWhere('planning.corbeille IS NULL')
                        ->orderBy('planning.planning','ASC')
                        ->setParameter('chantier', $chantier);
                }
            ]);
        }else{
            $builder
                ->add('libelle')
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Section::class,
            'chantier' =>null,
            'type' =>null
        ]);
    }
}

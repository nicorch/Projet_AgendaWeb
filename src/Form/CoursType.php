<?php

namespace App\Form;

use App\Entity\Cours;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateHeureDebut',DateTimeType::class, [
                'minutes' => [00,30]
            ])
            ->add('dateHeureFin',DateTimeType::class, [
                'minutes' => [00,30]
            ])
            ->add('type')
            ->add('professeur')
            ->add('salle')
            ->add('matiere')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Program;
use App\Entity\Category;
use App\Entity\Season;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProgramType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('summury')
            ->add('poster')
            ->add('slug')
            ->add('synopsis')
            ->add('country')
            ->add('year')
            ->add('category', null, ['choice_label' => 'name'])
            ->add('season', null, ['choice_label' => 'number'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Program::class,
        ]);
    }
}

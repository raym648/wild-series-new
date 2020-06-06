<?php

namespace App\Form;

use App\Entity\Program;
use App\Entity\Actor;
use App\Entity\Category;
use App\Entity\Season;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
            ->add('category', EntityType::class, ['class' => Category::class,'choice_label' => 'name',])
            ->add('season', EntityType::class, ['class' => Season::class,'choice_label' => 'number',])
            ->add('actors', EntityType::class, ['class' => Actor::class,'choice_label' => 'name',]);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Program::class,
        ]);
    }
}

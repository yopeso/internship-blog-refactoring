<?php

namespace App\Form;

use App\Entity\Video;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Identifiant de votre video :',
                'required' => true,
            ])
            ->add('platform', ChoiceType::class, [
                'label' => 'Plateforme :',
                'expanded' => true,
                'multiple' => false,
                    'choices' => [
                        'Youtube ex : "qcn8l7KjQtk"' => '0',
                        'Daylimotion ex : "x73781g"' => '1',
                    ],
                    'data' => '0'
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}

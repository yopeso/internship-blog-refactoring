<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Picture;
use App\Entity\Trick;
use App\Entity\Video;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrickType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom de la figure :',
                'required' => true,
                ])
            ->add('content', TextareaType::class, [
                    'label' => 'Description :' ,
                    'attr' => ['rows' => 5],
                    'required' => true,
                ])
            ->add('trickCategory', EntityType::class, [
                'class' => Category::class,
                'label' => 'Choisir une catégorie :',
            ])
            ->add('pictureDefault', EntityType::class, [
                'label' => 'Selectionner votre image principale :',
                'class' => Picture::class,
                'choice_label' => 'id',
                'required' => true,
            ])
            ->add('pictures', EntityType::class, [
                'label' => 'Selectionner vos images :',
                'class' => Picture::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,
                'required' => true,
            ])
            ->add('videos', EntityType::class, [
                'label' => 'Selectionner vos videos :',
                'class' => Video::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,
                'required' => false,
            ])
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Trick::class,
        ]);
    }
}

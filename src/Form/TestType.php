<?php

namespace App\Form;

use App\Entity\Test;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class TestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name', TextType::class, [
            'attr' => ['class' => 'form-control']
        ])

        ->add('email', TextType::class, [
            'attr' => ['class' => 'form-control']
        ])

        ->add('capacity', IntegerType::class, [
            'attr' => ['class' => 'form-control']
        ])

        ->add('description', TextareaType::class, [
            'attr' => ['class' => 'form-control']
        ])

        ->add('type', ChoiceType::class, [
            'choices' => [
            'music' => 'music', 
            'theater' => 'theater',
            'sport' => 'sport'],
            'attr' => ['class' => 'form-control']
        ])

        ->add('StartDate', DateTimeType::class, [
            'attr' => ['class' => 'date d-flex gap-4']
        ])

        ->add('EndDate', DateTimeType::class, [
            'attr' => ['class' => 'date d-flex gap-4']
        ])

        ->add('image', TextType::class, [
            'attr' => ['class' => 'form-control']
        ])

        ->add('zip', IntegerType::class, [
            'attr' => ['class' => 'form-control']
        ])

        ->add('city', TextType::class, [
            'attr' => ['class' => 'form-control']
        ])

        ->add('StreetName', TextType::class, [
            'attr' => ['class' => 'form-control']
        ])

        ->add('PhoneNumber', TextType::class, [
            'attr' => ['class' => 'form-control']
        ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Test::class,
        ]);
    }


}

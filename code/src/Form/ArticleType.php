<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;


class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'constraints' => [
                    new Length([
                        'min' => 10,
                        'max' => 255,
                        'minMessage' => 'The title must be at least {{ limit }} characters long.',
                        'maxMessage' => 'The title cannot be longer than {{ limit }} characters.'
                    ]),
                ],
            ])
            ->add('text', TextType::class, [
                'constraints' => [
                    new Length([
                        'min' => 10,
                        'max' => 5000,
                        'minMessage' => 'The text must be at least {{ limit }} characters long.',
                        'maxMessage' => 'The text cannot be longer than {{ limit }} characters.'
                    ]),
                ],
            ])
            ->add('image', TextType::class, [
                'constraints' => [
                    new Length([
                        'min' => 10,
                        'max' => 500,
                        'minMessage' => 'The image URL must be at least {{ limit }} characters long.',
                        'maxMessage' => 'The image URL cannot be longer than {{ limit }} characters.'
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\Article',
        ]);
    }
}
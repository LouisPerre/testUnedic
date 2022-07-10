<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\ProductCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'w-full p-3 text-sm border-gray-200 rounded-lg',
                    'placeholder' => 'Name of your product'
                ],
                'label' => 'Name',
                'label_attr' => [
                    'class' => 'text-sm font-medium'
                ]
            ])
            ->add('quantity', IntegerType::class, [
                'attr' => [
                    'class' => 'w-full p-3 text-sm border-gray-200 rounded-lg',
                    'placeholder' => 'Quantity'
                ],
                'label' => 'Quantity',
                'label_attr' => [
                    'class' => 'text-sm font-medium'
                ]
            ])
            ->add('category', EntityType::class, [
                'class' => ProductCategory::class,
                'attr' => [
                    'class' => 'w-full p-3 text-sm border-gray-200 rounded-lg',
                    'placeholder' => 'Category'
                ],
                'label' => 'Category',
                'label_attr' => [
                    'class' => 'text-sm font-medium'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}

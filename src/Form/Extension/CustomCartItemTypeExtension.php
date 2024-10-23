<?php

namespace App\Form\Extension;

use Sylius\Bundle\OrderBundle\Form\Type\CartItemType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;

class CustomCartItemTypeExtension extends AbstractTypeExtension
{
    public static function getExtendedTypes(): iterable
    {
        return [CartItemType::class];
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('quantity', IntegerType::class, [
            'attr' => [
                'min' => 10,
                'step' => 10,
                'value' => 10,
            ],
            'data' => 10,
        ]);
    }
}

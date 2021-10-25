<?php

declare(strict_types=1);

namespace App\Form\Extension;

use App\Entity\Product\Product;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('color', ChoiceType::class, [
                'choices' => Product::$colors,
                'label' => 'sylius.ui.color_selection',
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}

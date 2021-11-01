<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct implements ProductInterface
{
    protected const colorsTable = ProductInterface::colors;

    /** @var int */
    private int $color;

    public function getColor(): int
    {
        return $this->color;
    }

    public function setColor(?int $color): void
    {
        $this->color = $color;
    }

    public static function getColors(): array
    {
        return self::colorsTable;
    }
}

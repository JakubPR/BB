<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct
{
    private const NO_COLOR       = 'sylius.ui.color_none';
    private const COLOR_RED      = 'sylius.ui.color_red';
    private const COLOR_GREEN    = 'sylius.ui.color_green';
    private const COLOR_BLUE     = 'sylius.ui.color_blue';

    private const colors = [
        self::NO_COLOR      => 0,
        self::COLOR_RED     => 1,
        self::COLOR_GREEN   => 2,
        self::COLOR_BLUE    => 3,
    ];

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
        return self::colors;
    }
}

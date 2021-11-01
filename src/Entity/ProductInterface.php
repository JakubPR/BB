<?php

namespace App\Entity;

interface ProductInterface
{
    const NO_COLOR       = 'sylius.ui.color_none';
    const COLOR_RED      = 'sylius.ui.color_red';
    const COLOR_GREEN    = 'sylius.ui.color_green';
    const COLOR_BLUE     = 'sylius.ui.color_blue';

    const colors = [
        self::NO_COLOR      => 0,
        self::COLOR_RED     => 1,
        self::COLOR_GREEN   => 2,
        self::COLOR_BLUE    => 3,
    ];

    public function getColor(): ?int;

    public function setColor(?int $color): void;

    public static function getColors(): array;
}

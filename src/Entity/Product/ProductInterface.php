<?php

namespace App\Entity\Product;

interface ProductInterface
{
    public function getColor(): ?int;

    public function setColor(?int $color): void;
}

<?php

namespace App\Entity;

interface ProductInterface
{
    public function getColor(): ?int;

    public function setColor(?int $color): void;
}

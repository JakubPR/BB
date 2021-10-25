<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct
{
    public const NO_COLOR = 'not selected';
    public const COLOR_RED = 'red';
    public const COLOR_GREEN = 'green';
    public const COLOR_BLUE = 'blue';

    static public array $colors = [
        0 => self::NO_COLOR,
        1 => self::COLOR_RED,
        2 => self::COLOR_GREEN,
        3 => self::COLOR_BLUE,
    ];

    /**
     * @var integer
     *
     * @ORM\Column(name="color", type="integer", nullable=true)
     */
    private $color;

    /**
     * @return int
     */
    public function getColor(): int
    {
        return $this->color;
    }

    public function setColor(int $color): void
    {
        $this->color = $color;
    }

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}

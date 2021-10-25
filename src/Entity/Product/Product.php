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
    public const NO_COLOR       = 'sylius.ui.color_none';
    public const COLOR_RED      = 'sylius.ui.color_red';
    public const COLOR_GREEN    = 'sylius.ui.color_green';
    public const COLOR_BLUE     = 'sylius.ui.color_blue';

    static public array $colors = [
        self::NO_COLOR      => 0,
        self::COLOR_RED     => 1,
        self::COLOR_GREEN   => 2,
        self::COLOR_BLUE    => 3,
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

<?php

declare(strict_types=1);
namespace App\Shapes;

class Rectangle implements ShapeInterface
{
    private $side1;
    private $side2;

    public function __construct(float $side1, float $side2)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
    }

    public function area() : float
    {
        return $this->side1 * $this->side2;
    }
}
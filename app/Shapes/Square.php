<?php

declare(strict_types=1);
namespace App\Shapes;

class Square implements ShapeInterface
{
    private $sideLength;

    public function __construct(float $sideLength)
    {
        $this->sideLength = $sideLength;
    }

    public function area() : float
    {
        return $this->sideLength * $this->sideLength;
    }
}
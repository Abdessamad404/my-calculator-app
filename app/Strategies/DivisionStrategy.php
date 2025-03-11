<?php

namespace App\Strategies;

use InvalidArgumentException;

class DivisionStrategy
{
    public function execute(float $num1, float $num2): float
    {
        if ($num2 == 0) {
            throw new InvalidArgumentException("Division par zéro est impossible.");
        }
        return $num1 / $num2;
    }
}

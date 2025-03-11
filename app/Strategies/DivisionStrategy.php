<?php

namespace App\Strategies;

use InvalidArgumentException;

class DivisionStrategy
{
    public function execute(float $num1, float $num2): float
    {
        if ($num2 == 0) {
            throw new InvalidArgumentException("Cannot divide by zero.");
        }
        return $num1 / $num2;
    }
}

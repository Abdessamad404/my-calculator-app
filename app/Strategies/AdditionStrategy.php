<?php

namespace App\Strategies;

class AdditionStrategy
{
    public function execute(float $num1, float $num2): float
    {
        return $num1 + $num2;
    }
}

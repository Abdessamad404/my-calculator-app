<?php

namespace App\Services;

use App\Factories\OperationFactory;

class CalculatorService
{
    public function calculate(float $num1, float $num2, string $operation): float
    {
        $strategy = OperationFactory::create($operation);
        return $strategy->execute($num1, $num2);
    }
}

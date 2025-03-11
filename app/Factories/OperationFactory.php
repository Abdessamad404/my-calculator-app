<?php 

namespace App\Factories;

use App\Strategies\AdditionStrategy;
use App\Strategies\SubtractionStrategy;
use App\Strategies\MultiplicationStrategy;
use App\Strategies\DivisionStrategy;
use InvalidArgumentException;

class OperationFactory
{
    public static function create(string $operation)
    {
        return match ($operation) {
            'add' => new AdditionStrategy(),
            'subtract' => new SubtractionStrategy(),
            'multiply' => new MultiplicationStrategy(),
            'divide' => new DivisionStrategy(),
            default => throw new InvalidArgumentException("Invalid operation"),
        };
    }
}

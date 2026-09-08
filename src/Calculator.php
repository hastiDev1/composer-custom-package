<?php

namespace Hasti\Calculator;

class Calculator
{
    public function add(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }

    public function subtract(int|float $a, int|float $b): int|float
    {
        return $a - $b;
    }

    public function multiply(int|float $a, int|float $b): int|float
    {
        return $a * $b;
    }

    /**
     * @throws \DivisionByZeroError When the divisor is zero.
     */
    public function divide(int|float $a, int|float $b): float
    {
        if ($b == 0) {
            throw new \DivisionByZeroError('Cannot divide by zero.');
        }

        return $a / $b;
    }
}

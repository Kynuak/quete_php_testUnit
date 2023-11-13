<?php

namespace App;

class Calculator
{
    public function sum(int $firstValue, int $secondValue ): int 
    {
        return $firstValue + $secondValue;
    }

    public function multiplication(int $firstValue, int $secondValue): int
    {
        return $firstValue * $secondValue;
    }

    public function isEven(int $i): bool
    {
        return ($i % 2 === 0);
    }
}
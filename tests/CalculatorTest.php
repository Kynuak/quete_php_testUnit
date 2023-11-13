<?php

use App\Calculator;
use PHPUnit\Framework\Constraint\Callback;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testMultiplication(): void
    {
        //Arange
        $firstValue = 10;
        $secondValue = 20;
        $expectedResult = 200;

        $calculator = new Calculator();
        $mul = $calculator->multiplication($firstValue, $secondValue);

        $this->assertSame($expectedResult, $mul, 
            "La méthode mul() ne fonctionne pas ! "
        );
    }

    public function testIsEven(): void
    {
        $value = 2;

        $calculator = new Calculator();
        $isEven = $calculator->isEven($value);
        $this->assertTrue(true === $isEven, "La méthode ne dit pas s'il est pair");
    }
}
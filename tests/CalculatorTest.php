<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function testAddReturnsSumOfTwoNumbers(): void
    {
        $this->assertEquals(5, $this->add(2, 3));
    }

    public function testAddWithNegativeNumbersReturnsCorrectSum(): void
    {
        $this->assertEquals(-1, $this->add(2, -3));
    }
}

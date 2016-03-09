<?php

require_once 'Fibonacci.php';

class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    public function testWhenIEnterTheZeroNumberThenIReceiveZero()
    {
        $fibonacci = new Fibonacci();

        $this->assertEquals(0, $fibonacci->calculate(0));
    }

    public function testWhenIEnterTheOneNumberThenIReceiveOne()
    {
        $fibonacci = new Fibonacci();

        $this->assertEquals(1, $fibonacci->calculate(1));
    }

    public function testWhenIEnterTheTwoNumberThenIReceiveOne()
    {
        $fibonacci = new Fibonacci();

        $this->assertEquals(1, $fibonacci->calculate(2));
    }

    public function testWhenIEnterTheNumberThreeThenIReceiveTwo()
    {
        $fibonacci = new Fibonacci();

        $this->assertEquals(2, $fibonacci->calculate(3));
    }
}

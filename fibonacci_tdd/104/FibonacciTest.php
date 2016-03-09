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
}

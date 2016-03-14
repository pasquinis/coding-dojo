<?php

require_once 'Fibonacci.php';

class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    public function testWhenIInputZeroNumberWhenIReceiveZero()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(0, $fibonacci->compute(0));
    }

    public function testWhenIInputOneNumberWhenIReceiveOne()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->compute(1));
    }
}

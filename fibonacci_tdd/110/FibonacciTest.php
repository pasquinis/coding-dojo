<?php

require_once 'Fibonacci.php';

class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->fibonacci = new Fibonacci();
    }

    public function testWhenIInputNumberZeroThenIReceiveNumberZero()
    {
        $this->assertEquals(0, $this->fibonacci->compute(0));
    }

    public function testWhenIInputNumberOneThenIReceiveNumberOne()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $this->fibonacci->compute(1));
    }
}

<?php

require_once 'Fibonacci.php';

class FibonacciTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->fibonacci = new Fibonacci();
    }

    public function testWhenIInputZeroThenIReceiveZero()
    {
        $this->assertEquals(0, $this->fibonacci->compute(0));
    }

    public function testWhenIInputOneThenIReceiveOne()
    {
        $this->assertEquals(1, $this->fibonacci->compute(1));
    }

    public function testWhenIInputTwoThenIReceiveOne()
    {
        $this->assertEquals(1, $this->fibonacci->compute(2));
    }

    public function testWhenIInputThreehenIReceiveTwo()
    {
        $this->assertEquals(2, $this->fibonacci->compute(3));
    }
}

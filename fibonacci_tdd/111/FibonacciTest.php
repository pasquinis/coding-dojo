<?php

require_once 'Fibonacci.php';

class FibonacciTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->fibonacci = new Fibonacci();
    }

    public function testWhenIInputNumberZeroThenIComputeZero()
    {
        $this->assertEquals(0, $this->fibonacci->compute(0));
    }

    public function testWhenIInputNumberOneThenIComputeOne()
    {
        $this->assertEquals(1, $this->fibonacci->compute(1));
    }

    public function testWhenIInputNumberTwoThenIComputeOne()
    {
        $this->assertEquals(1, $this->fibonacci->compute(2));
    }

    public function testWhenIInputNumberThreeThenIComputeTwo()
    {
        $this->assertEquals(2, $this->fibonacci->compute(3));
    }

    public function testWhenIInputNumberFourThenIComputeThree()
    {
        $this->assertEquals(3, $this->fibonacci->compute(4));
    }
}

<?php

require_once 'Fibonacci.php';

class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    public function testGivenTheNumberZeroThenTheComputationIsZero()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(0, $fibonacci->compute(0));
    }

    public function testGivenTheNumberOneThenTheComputationIsOne()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->compute(1));
    }

    public function testGivenTheNumberTwoThenTheComputationIsOne()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->compute(2));
    }

    public function testGivenTheNumberThreeThenTheComputationIsTwo()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(2, $fibonacci->compute(3));
    }

    public function testGivenTheNumberFourThenTheComputationIsThree()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(3, $fibonacci->compute(4));
    }
}

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
}

<?php

require_once 'Fibonacci.php';

class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    public function testGivenTheNumberZeroThenTheComputationIsZero()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(0, $fibonacci->compute(0));
    }
}

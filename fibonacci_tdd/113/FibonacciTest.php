<?php

require_once 'Fibonacci.php';

class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    public function testWhenIInsertNumberZeroThenIReceiveNumberZero()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(0, $fibonacci->compute(0));
    }
}

<?php

require_once 'Fibonacci.php';

class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    public function testWhenIEnterNumberZeroThenIExpectNumberZero()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(0, $fibonacci->compute(0));
    }

    public function testWhenIEnterNumberOneThenIExpectNumberOne()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->compute(1));
    }

    public function testWhenIEnterNumberTwoThenIExpectNumberOne()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->compute(2));
    }

    public function testWhenIEnterNumberThreeThenIExpectNumberTwo()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(2, $fibonacci->compute(3));
    }
}

<?php

require_once 'Fibonacci.php';

class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->fibonacci = new Fibonacci();
    }

    public function testWhenIInsertNumberZeroThenIReceiveNumberZero()
    {
        $this->assertEquals(0, $this->fibonacci->compute(0));
    }

    public function testWhenIInsertNumberOneThenIReceiveNumberOne()
    {
        $this->assertEquals(1, $this->fibonacci->compute(1));
    }

    public function testWhenIInsertNumberTwoThenIReceiveNumberOne()
    {
        $this->assertEquals(1, $this->fibonacci->compute(2));
    }
}

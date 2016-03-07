<?php
require_once 'Fibonacci.php';

class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    public function testWhenIInputTheNumber0IGivenTheResponse0()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(0, $fibonacci->compute(0));
    }

    public function testWhenIInputTheNumber1IGivenTheResponse1()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->compute(1));
    }

    public function testWhenIInputTheNumber2IGivenTheResponse1()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->compute(2));
    }

    public function testWhenIInputTheNumber3IGivenTheResponse2()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(2, $fibonacci->compute(3));
    }
}

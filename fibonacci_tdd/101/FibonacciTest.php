<?php
require_once 'Fibonacci.php';

class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    public function testGivenTheNumberOneThenIReceiveTheResponseOne()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->calculate(1));
    }

    public function testGivenTheNumberTwoThenIReceiveTheResponseOne()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->calculate(2));
    }
}

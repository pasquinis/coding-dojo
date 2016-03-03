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

    public function testGivenTheNumberThreeThenIReceiveTheResponseTwo()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(2, $fibonacci->calculate(3));
    }

    public function testGivenTheNumberFourThenIReceiveTheResponseThree()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(3, $fibonacci->calculate(4));
    }
}

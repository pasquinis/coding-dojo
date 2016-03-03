<?php
require_once 'Fibonacci.php';

class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    public function testGivenTheNumberOneThenIReceiveTheResponseOne()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(1, $fibonacci->calculate(1));
    }
}

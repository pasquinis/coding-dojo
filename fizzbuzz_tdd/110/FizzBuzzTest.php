<?php

require_once 'FizzBuzz.php';

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    public function testGivenANumberOneResponseIsOne()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals(1, $fizz->say(1));
    }

    public function testGivenANumberTwoResponseIsTwo()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals(2, $fizz->say(2));
    }
}

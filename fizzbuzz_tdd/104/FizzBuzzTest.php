<?php

require_once('FizzBuzz.php');

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->fizz = new FizzBuzz();
    }

    public function testWhenISayOneTheResponseIsOne()
    {
        $this->assertEquals(1, $this->fizz->say(1));
    }

    public function testWhenISayTwoTheResponseIsTwo()
    {
        $this->assertEquals(2, $this->fizz->say(2));
    }

    public function testWhenISayThreeTheResponseIsFizz()
    {
        $this->assertEquals('Fizz', $this->fizz->say(3));
    }

    public function testWhenISayAMultipleOfThreeTheResponseIsFizz()
    {
        $this->assertEquals('Fizz', $this->fizz->say(3*2));
    }

    public function testWhenISayAFiveTheResponseIsBuzz()
    {
        $this->assertEquals('Buzz', $this->fizz->say(5));
    }
}

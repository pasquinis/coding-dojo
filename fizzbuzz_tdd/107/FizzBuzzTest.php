<?php

require_once('FizzBuzz.php');

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->fizz = new FizzBuzz();
    }

    public function testWhenISayOneGivenTheResponseOne()
    {
        $this->assertEquals(1, $this->fizz->say(1));
    }

    public function testWhenISayTwoGivenTheResponseTwo()
    {
        $this->assertEquals(2, $this->fizz->say(2));
    }

    public function testWhenISayThreeGivenTheResponseFizz()
    {
        $this->assertEquals('Fizz', $this->fizz->say(3));
    }

    public function testWhenISayAMultipleOfThreeGivenTheResponseFizz()
    {
        $this->assertEquals('Fizz', $this->fizz->say(3*2));
    }

    public function testWhenISayAFiveGivenTheResponseBuzz()
    {
        $this->assertEquals('Buzz', $this->fizz->say(5));
    }

    public function testWhenISayAMultipleOfFiveGivenTheResponseBuzz()
    {
        $this->assertEquals('Buzz', $this->fizz->say(5*2));
    }

    public function testWhenISayAMultipleOfThreeAndFiveGivenTheResponseFizzBuzz()
    {
        $this->assertEquals('FizzBuzz', $this->fizz->say(5*3));
    }

    public function testWhenISayAMultipleOfThreeAndFiveAndSevenGivenTheResponseFizzBuzzBang()
    {
        $this->assertEquals('FizzBuzzBang', $this->fizz->say(5*3*7));
    }
}


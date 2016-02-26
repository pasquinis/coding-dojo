<?php

require_once('FizzBuzz.php');

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->fizz = new FizzBuzz([
            3 => 'Fizz',
            5 => 'Buzz',
            7 => 'Bang'
        ]);
    }

    public function testGivenANumber1ThenTheResponseIs1()
    {
        $this->assertEquals(1, $this->fizz->say(1));
    }

    public function testGivenANumber2ThenTheResponseIs2()
    {
        $this->assertEquals(2, $this->fizz->say(2));
    }

    public function testGivenANumber3ThenTheResponseIsFizz()
    {
        $this->assertEquals('Fizz', $this->fizz->say(3));
    }

    public function testGivenANumberMultiplerOf3ThenTheResponseIsFizz()
    {
        $this->assertEquals('Fizz', $this->fizz->say(3*2));
    }

    public function testGivenANumber5ThenTheResponseIsBuzz()
    {
        $this->assertEquals('Buzz', $this->fizz->say(5));
    }

    public function testGivenANumberIsMultipleOf5ThenTheResponseIsBuzz()
    {
        $this->assertEquals('Buzz', $this->fizz->say(5*2));
    }

    public function testGivenANumber7ThenTheResponseIsBang()
    {
        $this->assertEquals('Bang', $this->fizz->say(7));
    }

    public function testGivenANumberIsMultipleOf7ThenTheResponseIsBang()
    {
        $this->assertEquals('Bang', $this->fizz->say(7*2));
    }

    public function testGivenANumberIsMultipleOf3And5ThenTheResponseIsFizzBuzz()
    {
        $this->assertEquals('FizzBuzz', $this->fizz->say(3*5));
    }

    public function testGivenANumberIsMultipleOf3And5And7ThenTheResponseIsFizzBuzzBang()
    {
        $this->assertEquals('FizzBuzzBang', $this->fizz->say(3*5*7));
    }
}

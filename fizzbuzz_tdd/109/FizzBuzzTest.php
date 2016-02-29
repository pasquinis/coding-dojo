<?php

require_once('FizzBuzz.php');

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function testGivenANumberOneTheResponseIsOne()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals(1, $fizz->say(1));
    }

    public function testGivenANumberTwoTheResponseIsTwo()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals(2, $fizz->say(2));
    }

    public function testGivenANumberThreeTheResponseIsFizz()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizz->say(3));
    }

    public function testGivenAMultipleOfThreeTheResponseIsFizz()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizz->say(3*2));
    }

    public function testGivenAMultipleOfFiveTheResponseIsBuzz()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals('Buzz', $fizz->say(5*2));
    }

    public function testGivenAMultipleOfThreeAndFiveTheResponseIsFizzBuzz()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals('FizzBuzz', $fizz->say(3*5));
    }

    public function testGivenAMultipleOfSevenTheResponseIsBang()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals('Bang', $fizz->say(7*2));
    }
}

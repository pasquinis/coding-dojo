<?php

require_once 'FizzBuzz.php';

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function testWhenISayNumberOneThenIReceiveWordOne()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals(1, $fizz->say(1));
    }

    public function testWhenISayNumberTwoThenIReceiveWordTwo()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals(2, $fizz->say(2));
    }

    public function testWhenISayNumberThreeThenIReceiveWordFizz()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizz->say(3));
    }

    public function testWhenISayANumberMultipleOfThreeThenIReceiveWordFizz()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizz->say(3*2));
    }

    public function testWhenISayANumberMultipleOfFiveThenIReceiveWordBuzz()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals('Buzz', $fizz->say(5*2));
    }
}

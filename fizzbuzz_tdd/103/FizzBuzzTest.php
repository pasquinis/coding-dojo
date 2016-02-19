<?php

require_once('FizzBuzz.php');

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function testWhenISay1TheResponseIs1()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals(1, $fizz->say(1));
    }

    public function testWhenISay2TheResponseIs2()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals(2, $fizz->say(2));
    }

    public function testWhenISay3TheResponseIsFizz()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizz->say(3));
    }

    public function testWhenISay5TheResponseIsBuzz()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals('Buzz', $fizz->say(5));
    }

    public function testWhenISay15TheResponseIsFizzBuzz()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals('FizzBuzz', $fizz->say(15));
    }
}

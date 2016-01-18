<?php

require_once('FizzBuzz.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase 
{

    public function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testICanSayOneIsOne() 
    {
        $this->assertEquals('1', $this->fizzBuzz->say('1'));
    }

    public function testICanSayTwoIsTwo()
    {
        $this->assertEquals('2', $this->fizzBuzz->say('2'));
    }

    public function testICanSayThirdIsFizz()
    {
        $this->assertEquals('Fizz', $this->fizzBuzz->say('3'));
    }

    public function testICanSayFiveIsBuzz()
    {
        $this->assertEquals('Buzz', $this->fizzBuzz->say('5'));
    }
}

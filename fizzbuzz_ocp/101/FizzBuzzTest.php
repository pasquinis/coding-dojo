<?php

require_once('FizzBuzzFactory.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function testICanSayOneIfOne()
    {
        $obj = FizzBuzzFactory::create();
        $this->assertEquals('1', $obj->say('1'));
    }

    public function testICanSayFizzOfMultipleOfThree()
    {
        $obj = FizzBuzzFactory::create();
        $this->assertEquals('Fizz', $obj->say('3'));
        $this->assertEquals('Fizz', $obj->say('6'));
        $this->assertEquals('Fizz', $obj->say('9'));
    }
    
    public function testICanSayBuzzOfMultipleOfFive()
    {
        $obj = FizzBuzzFactory::create();
        $this->assertEquals('Buzz', $obj->say('5'));
        $this->assertEquals('Buzz', $obj->say('10'));
        $this->assertEquals('Buzz', $obj->say('20'));
    }

    public function testICanSayFizzBuzzOfMultipleOfFiveAndThree()
    {
        $obj = FizzBuzzFactory::create();
        $this->assertEquals('FizzBuzz', $obj->say('15'));
        $this->assertEquals('FizzBuzz', $obj->say('30'));
        $this->assertEquals('FizzBuzz', $obj->say('45'));
    }

    public function testICanSayBangOfMultipleOfSeven()
    {
        $obj = FizzBuzzFactory::create();
        $this->assertEquals('Bang', $obj->say('7'));
        $this->assertEquals('Bang', $obj->say('14'));
        $this->assertEquals('Bang', $obj->say('28'));
    }

    public function testICanSayFizzBangOfMultipleOfThreeAndSeven()
    {
        $obj = FizzBuzzFactory::create();
        $this->assertEquals('FizzBang', $obj->say('21'));
        $this->assertEquals('FizzBang', $obj->say('42'));
        $this->assertEquals('FizzBang', $obj->say('84'));
    }
}

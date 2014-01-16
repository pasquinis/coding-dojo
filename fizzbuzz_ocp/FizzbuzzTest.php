<?php

include(__DIR__ . '/FizzbuzzFactory.php');

class FizzbuzzTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldSayTheNumber()
    {
        $fizzbuzz = FizzbuzzFactory::create();
        $this->assertEquals("1", $fizzbuzz->say(1));
        $this->assertEquals("2", $fizzbuzz->say(2));
    }

    public function testWhenIPassAMultipleOfThreeSayFizz()
    {
        $fizzbuzz = FizzbuzzFactory::create();
        $this->assertEquals("Fizz", $fizzbuzz->say(3));
        $this->assertEquals("Fizz", $fizzbuzz->say(6));
    }

    public function testWhenIPassAMultipleOfFiveSayBuzz()
    {
        $fizzbuzz = FizzbuzzFactory::create();
        $this->assertEquals("Buzz", $fizzbuzz->say(5));
        $this->assertEquals("Buzz", $fizzbuzz->say(10));
    }

    public function testWhenIPassAMultipleOfFifteenSayFizzBuzz()
    {
        $fizzbuzz = FizzbuzzFactory::create();
        $this->assertEquals("FizzBuzz", $fizzbuzz->say(15));
        $this->assertEquals("FizzBuzz", $fizzbuzz->say(30));
    }
    
    public function testWhenIPassAMultipleOfSevenSayBang()
    {
        $fizzbuzz = FizzbuzzFactory::create();
        $this->assertEquals("Bang", $fizzbuzz->say(7));
        $this->assertEquals("Bang", $fizzbuzz->say(14));
    }
    public function testWhenIPass42SayAnswer()
    {
        $fizzbuzz = FizzbuzzFactory::create();
        $this->assertEquals("Answer", $fizzbuzz->say(42));
        $this->assertNotEquals("Answer", $fizzbuzz->say(84));
    }
}

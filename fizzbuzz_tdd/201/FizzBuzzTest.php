<?php

use PHPUnit\Framework\TestCase;

require_once "FizzBuzz.php";

class FizzBuzzTest extends TestCase
{

    protected function setUp() {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testWhenISayOne() {
        $this->assertEquals(1, $this->fizzBuzz->say(1));
    }

    public function testWhenISayTwo() {
        $this->assertEquals(2, $this->fizzBuzz->say(2));
    }

    public function testWhenISayThreeOrMultiple() {
        $this->assertEquals('Fizz', $this->fizzBuzz->say(3));
        $this->assertEquals('Fizz', $this->fizzBuzz->say(6));
    }

    public function testWhenISayFour() {
        $this->assertEquals(4, $this->fizzBuzz->say(4));
    }

    public function testWhenISayFiveOrMultiple() {
        $this->assertEquals('Buzz', $this->fizzBuzz->say(5));
        $this->assertEquals('Buzz', $this->fizzBuzz->say(10));
    }

    public function testWhenISayAMultipleOfThreeAndFive() {
        $this->assertEquals('FizzBuzz', $this->fizzBuzz->say(3*5));
    }
}

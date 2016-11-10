<?php

use PHPUnit\Framework\TestCase;

require_once "FizzBuzz.php";

class FizzBuzzTest extends TestCase
{
    public function testWhenISayOne() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(1, $fizzBuzz->say(1));
    }

    public function testWhenISayTwo() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(2, $fizzBuzz->say(2));
    }

    public function testWhenISayThreeOrMultiple() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzBuzz->say(3));
        $this->assertEquals('Fizz', $fizzBuzz->say(6));
    }

    public function testWhenISayFour() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(4, $fizzBuzz->say(4));
    }

    public function testWhenISayFive() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('Buzz', $fizzBuzz->say(5));
    }
}

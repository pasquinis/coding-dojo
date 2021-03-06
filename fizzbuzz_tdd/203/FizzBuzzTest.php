<?php

use PHPUnit\Framework\TestCase;

require 'FizzBuzz.php';

class FizzBuzzTest extends TestCase
{

    protected function setUp()
    {
        $this->game = new FizzBuzz();
    }

    public function testWhenISayOne()
    {
        $this->assertEquals(1, $this->game->say(1));
    }

    public function testWhenISayTwo()
    {
        $this->assertEquals(2, $this->game->say(2));
    }

    public function testWhenISayThreeOrMultipleOfThree()
    {
        $this->assertEquals('Fizz', $this->game->say(3));
        $this->assertEquals('Fizz', $this->game->say(3*2));
    }

    public function testWhenISayFiveOrMultipleOfFive()
    {
        $this->assertEquals('Buzz', $this->game->say(5));
        $this->assertEquals('Buzz', $this->game->say(5*2));
    }

    public function testWhenISayAMultipleOfThreeAndFive()
    {
        $this->assertEquals('FizzBuzz', $this->game->say(3*5));
    }
}

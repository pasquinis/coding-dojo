<?php

require_once('FizzBuzz.php');
require_once('Number.php');
require_once('Fizz.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    public function testCanISayNumber()
    {
        $rules[] = new Number();
        $fizzbuzz = new FizzBuzz($rules);
        $this->assertEquals(1, $fizzbuzz->say(1));
    }

    public function testCanISayFizz()
    {
        $rules = [new Fizz(), new Number()];
        $fizzbuzz = new FizzBuzz($rules);
        $this->assertEquals('Fizz', $fizzbuzz->say(3));
    }
}

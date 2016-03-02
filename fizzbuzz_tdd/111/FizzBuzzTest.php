<?php

require_once 'FizzBuzz.php';

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function testWhenISayNumberOneThenIReceiveOneWord()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals(1, $fizz->say(1));
    }

    public function testWhenISayNumberTwoThenIReceiveOneTwo()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals(2, $fizz->say(2));
    }
}

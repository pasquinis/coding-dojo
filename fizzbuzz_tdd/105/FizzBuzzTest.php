<?php

require_once('FizzBuzz.php');

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function testWhenISayOneTheResponseIsOne()
    {
        $fizz = new FizzBuzz(1);
        $this->assertEquals(1, $fizz->say());
    }

    public function testWhenISayTwoTheResponseIsTwo()
    {
        $fizz = new FizzBuzz(2);
        $this->assertEquals(2, $fizz->say());
    }

    public function testWhenISayThreeTheResponseIsFizz()
    {
        $fizz = new FizzBuzz(3);
        $this->assertEquals('Fizz', $fizz->say());
    }

    public function testWhenISayAMultipleOFThreeTheResponseIsFizz()
    {
        $fizz = new FizzBuzz(3*2);
        $this->assertEquals('Fizz', $fizz->say());
    }
}

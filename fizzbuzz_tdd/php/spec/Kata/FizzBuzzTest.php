<?php

namespace Kata;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    public function testHappyPath()
    {
        $obj = new FizzBuzz(1);
        $this->assertEquals('1', $obj->tell());
    }

    public function testIfNumberISDivisibleByThreeResponseIsFizz()
    {
        $obj = new FizzBuzz(3);
        $this->assertEquals('1 2 Fizz', $obj->tell());
    }

    public function testIfNumberIsDivisibleByFiveResponseIsBuzz()
    {
        $obj = new FizzBuzz(5);
        $this->assertEquals('1 2 Fizz 4 Buzz', $obj->tell());
    }

    public function testANumberIsDivisibleByFiveAndThreeContainsFizzBuzz()
    {
        $obj = new FizzBuzz(15);
        $this->assertEquals(
            '1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz'
            , $obj->tell());
    }

}

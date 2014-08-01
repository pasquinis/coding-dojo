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
            '1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz Fizz 14 FizzBuzz'
            , $obj->tell());
    }

    public function testWhenANumberISDivisibleAndContainsFiveIsBuzz()
    {
        $obj = new FizzBuzz(52);
        $this->assertEquals(
            '1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz Fizz 14 FizzBuzz 16 17 Fizz 19 Buzz Fizz 22 Fizz Fizz Buzz 26 Fizz 28 29 Fizz Fizz Fizz Fizz Fizz Fizz Fizz Fizz Fizz Fizz Buzz 41 Fizz Fizz 44 FizzBuzz 46 47 Fizz 49 Buzz Fizz Buzz'
            , $obj->tell());
    }


}

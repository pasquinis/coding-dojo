<?php

require_once('FizzBuzz.php');

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function testGivenANumberOneTheResponseIsOne()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals(1, $fizz->say(1));
    }
}

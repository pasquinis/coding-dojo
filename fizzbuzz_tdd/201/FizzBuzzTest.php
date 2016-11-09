<?php

use PHPUnit\Framework\TestCase;

require_once "FizzBuzz.php";

class FizzBuzzTest extends TestCase
{
    public function testWhenISayOne() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(1, $fizzBuzz->say(1));
    }
}

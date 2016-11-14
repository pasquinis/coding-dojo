<?php

use PHPUnit\Framework\TestCase;

require 'FizzBuzz.php';

class FizzBuzzTest extends TestCase
{

    public function testWhenISayOne()
    {
        $game = new FizzBuzz();
        $this->assertEquals(1, $game->say(1));
    }
}

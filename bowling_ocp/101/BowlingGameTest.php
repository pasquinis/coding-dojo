<?php

require_once('Bowling.php');

class BowlingGameTest extends PHPUnit_Framework_TestCase
{
    public function testAllPinsIsZero()
    {
        $game = new Bowling();
        for($i=0; $i < 21; $i++) {
            $game->roll(0);
        }
        $this->assertEquals(0, $game->score());
    }
}

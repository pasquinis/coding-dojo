<?php

require_once('Game.php');

class BowlingKataTest extends PHPUnit_Framework_TestCase
{
    public function testAllFrameAreZeroAndTheScoreIsZero()
    {
        $game = new Game();
        for($i = 0; $i < 21; $i++) {
            $game->roll(0);
        }
        $this->assertEquals(0, $game->score());
    }


    public function testAllFrameAreOneAndTheScoreIs21()
    {
        $game = new Game();
        for($i = 0; $i < 21; $i++) {
            $game->roll(1);
        }
        $this->assertEquals(21, $game->score());
    }
}

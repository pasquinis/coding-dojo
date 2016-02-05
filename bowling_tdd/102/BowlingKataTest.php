<?php

require_once('Game.php');

class BowlingKataTest extends PHPUnit_Framework_TestCase
{

    private $game;

    protected function setUp()
    {
        $this->game = new Game();
    }

    public function testAllFrameAreZeroAndTheScoreIsZero()
    {
        $this->rollMany(0, 20);
        $this->assertEquals(0, $this->game->score());
    }

    public function testAllFrameAreOneAndTheScoreIs20()
    {
        $this->rollMany(1, 20);
        $this->assertEquals(20, $this->game->score());
    }

    private function rollMany($pinsDown, $times)
    {
        for($i = 0; $i < $times; $i++) {
            $this->game->roll($pinsDown);
        }
    }
}

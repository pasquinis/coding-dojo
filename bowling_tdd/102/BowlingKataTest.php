<?php

require_once('Game.php');
require_once('OrdinaryFrame.php');
require_once('LastFrame.php');

class BowlingKataTest extends PHPUnit_Framework_TestCase
{

    private $game;

    protected function setUp()
    {
        $this->game = new Game(
            new OrdinaryFrame(),
            new LastFrame()
        );
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

    public function testOneSpareAndTheScoreIs18()
    {
        $this->game->roll(4);
        $this->game->roll(6);
        $this->game->roll(4);
        $this->rollMany(0, 17);
        $this->assertEquals(18, $this->game->score());
    }


    public function testOneStrikeAndTheScoreIs30()
    {
        $this->game->roll(10);
        $this->game->roll(6);
        $this->game->roll(4);
        $this->rollMany(0, 16);
        $this->assertEquals(30, $this->game->score());
    }

    public function testThePerfectGame()
    {
        $this->rollMany(10, 12);
        $this->assertEquals(300, $this->game->score());
    }

    private function rollMany($pinsDown, $times)
    {
        for($i = 0; $i < $times; $i++) {
            $this->game->roll($pinsDown);
        }
    }
}

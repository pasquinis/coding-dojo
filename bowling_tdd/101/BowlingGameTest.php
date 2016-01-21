<?php

require_once('Game.php');

class BowlingGameTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->game = new Game();
    }

    public function testTheGameIsAllZero()
    {
        $this->addSameNumberOfPins(20, 0);
        $this->assertEquals(0, $this->game->score());
    }

    public function testTheGameIs20()
    {
        $this->addSameNumberOfPins(20, 1);
        $this->assertEquals(20, $this->game->score());
    }

    public function testWithOneSpare()
    {
        $this->game->roll(7);
        $this->game->roll(3);
        $this->game->roll(5);
        $this->addSameNumberOfPins(17, 0);
        $this->assertEquals(20, $this->game->score());
    }

    public function testWithTwoSpare()
    {
        $this->game->roll(7);
        $this->game->roll(3);
        $this->game->roll(5);
        $this->game->roll(5);
        $this->game->roll(3);
        $this->addSameNumberOfPins(15, 0);
        $this->assertEquals(31, $this->game->score());
    }

    public function testSpareInTheLastFrame()
    {
        $this->addSameNumberOfPins(18, 0);
        $this->game->roll(2);
        $this->game->roll(8);
        $this->game->roll(3);
        $this->assertEquals(13, $this->game->score());
    }

    public function testWithOneStrike()
    {
        $this->game->roll(10);
        $this->game->roll(3);
        $this->game->roll(4);
        $this->addSameNumberOfPins(16, 0);
        $this->assertEquals(24, $this->game->score());
    }

    public function testPerfectGame()
    {
        $this->addSameNumberOfPins(12, 10);
        $this->assertEquals(300, $this->game->score());
    }

    private function addSameNumberOfPins($iterarion, $numberOfPins)
    {
        for($i = 0; $i < $iterarion; $i++) {
            $this->game->roll($numberOfPins);
        }
    }
}

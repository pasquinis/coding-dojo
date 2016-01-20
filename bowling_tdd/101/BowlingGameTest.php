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

    private function addSameNumberOfPins($iterarion, $numberOfPins)
    {
        for($i = 0; $i < $iterarion; $i++) {
            $this->game->roll($numberOfPins);
        }
    }
}

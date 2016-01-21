<?php

require_once('Bowling.php');

class BowlingGameTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->game = new Bowling();
    }

    public function testAllPinsIsZero()
    {
        $this->multipleRollWith(21, 0);
        $this->assertEquals(0, $this->game->score());
    }

    public function testAllPinsIsTwo()
    {
        $this->multipleRollWith(20, 2);
        $this->assertEquals(40, $this->game->score());
    }

    public function testThePinsIsUpAndDown()
    {
        $this->generatePinsUpAndDown();
        $this->assertEquals(50, $this->game->score());
    }

    private function generatePinsUpAndDown()
    {
        for($i = 0; $i < 6;$i++) {
            $this->game->roll($i);
        }
        for($i=4; $i > 0; $i--) {
            $this->game->roll($i);
        }
        for($i = 0; $i < 6;$i++) {
            $this->game->roll($i);
        }
        for($i=4; $i > 0; $i--) {
            $this->game->roll($i);
        }
    }
    private function multipleRollWith($iteration, $pins)
    {
        for($i=0; $i < $iteration; $i++) {
            $this->game->roll($pins);
        }
    }
}

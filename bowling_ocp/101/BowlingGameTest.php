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

    private function multipleRollWith($iteration, $pins)
    {
        for($i=0; $i < $iteration; $i++) {
            $this->game->roll($pins);
        }
    }
}

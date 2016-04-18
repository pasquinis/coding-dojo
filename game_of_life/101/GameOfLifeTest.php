<?php

require_once 'GameOfLife.php';

class GameOfLifeTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldDieCellWithFewerThenTwoNeighbours()
    {
        $gol = new GameOfLife();
        $this->assertFalse($gol->nextGeneration($alive = false, $neighboursLive = 1));
    }
}

<?php

require_once 'GameOfLife.php';

class GameOfLifeTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->gol = new GameOfLife();
    }

    public function testShouldDieCellWithFewerThenTwoAliveNeighbours()
    {
        $this->assertFalse($this->gol->nextGeneration(GameOfLife::ALIVE, $neighboursLive = 0));
        $this->assertFalse($this->gol->nextGeneration(GameOfLife::ALIVE, $neighboursLive = 1));
    }

    public function testShouldLiveCellWhenAliveNeighboursAreTwoOrThree()
    {
        $this->assertTrue($this->gol->nextGeneration(GameOfLife::ALIVE, $neighboursLive = 2));
        $this->assertTrue($this->gol->nextGeneration(GameOfLife::ALIVE, $neighboursLive = 3));
    }
}

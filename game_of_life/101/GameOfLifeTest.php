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
        $this->assertFalse($this->gol->nextGeneration(GameOfLife::ALIVE, $aliveNeighbours = 0));
        $this->assertFalse($this->gol->nextGeneration(GameOfLife::ALIVE, $aliveNeighbours = 1));
    }

    public function testShouldLiveCellWhenAliveNeighboursAreTwoOrThree()
    {
        $this->assertTrue($this->gol->nextGeneration(GameOfLife::ALIVE, $aliveNeighbours = 2));
        $this->assertTrue($this->gol->nextGeneration(GameOfLife::ALIVE, $aliveNeighbours = 3));
    }

    public function testShouldDieCellWithMoreThenThreeNeighbours()
    {
        $this->assertFalse($this->gol->nextGeneration(GameOfLife::ALIVE, $aliveNeighbours = 4));
        $this->assertFalse($this->gol->nextGeneration(GameOfLife::ALIVE, $aliveNeighbours = 5));
        $this->assertFalse($this->gol->nextGeneration(GameOfLife::ALIVE, $aliveNeighbours = 6));
        $this->assertFalse($this->gol->nextGeneration(GameOfLife::ALIVE, $aliveNeighbours = 7));
        $this->assertFalse($this->gol->nextGeneration(GameOfLife::ALIVE, $aliveNeighbours = 8));
    }
}

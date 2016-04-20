<?php

require_once 'GameOfLife.php';

class GameOfLifeTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->gol = new GameOfLife(4, 8);
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

    public function testShouldBecomeLiveCellWhenTherAreThreeAliveNeighbours()
    {
        $this->assertTrue($this->gol->nextGeneration(GameOfLife::DEAD, $aliveNeighbours = 3));
    }

    public function testShouldCreateEmptyGrid()
    {
        $emptyGrid = <<<EMPTY

........
........
........
........
EMPTY;

        $this->assertEquals($emptyGrid, $this->gol->grid());
    }

    public function testShouldCalculateCoordinatesForNeighbours()
    {
        $this->assertEquals(0, $this->gol->neighbours($x = 0, $y = 0));
    }

    public function testShouldCalculateTickStartingFromBlinkerPattern()
    {
        $generationOne = <<<ONE

........
.***....
........
........
ONE;
        $generationTwo = <<<TWO

..*.....
..*.....
..*.....
........
TWO;

        $this->gol->add([[1, 1] , [1,2], [1,3]]);
        $this->assertEquals(1, $this->gol->neighbours($x = 1, $y = 1));
        $this->assertEquals(2, $this->gol->neighbours($x = 1, $y = 2));
        $this->assertEquals(1, $this->gol->neighbours($x = 1, $y = 3));
        $this->assertEquals($generationOne, $this->gol->grid());
        $this->gol->tick();
        $this->assertEquals($generationTwo, $this->gol->grid());
        $this->gol->tick();
        $this->assertEquals($generationOne, $this->gol->grid());
    }
}

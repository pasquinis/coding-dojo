<?php

require_once 'GameOfLife.php';

class GameOfLifeTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->gol = new GameOfLife();
    }

    public function testGivenAPatternIFindTheNextGeneration()
    {
        $blinker = [[1, 0], [1, 1], [1, 2]];
        $expectedGeneration = [[0, 1], [1, 1], [2, 1]];

        $this->gol->add($blinker);
        $this->gol->tick();

        $this->assertEquals($expectedGeneration, $this->gol->generation());
    }


    public function testAddingAPatternToArrayOfAliveCoordinates()
    {
        $blinker = [[1, 0], [1, 1], [1, 2]];
        $square = [[0, 0], [0, 1], [1, 0], [1, 1]];

        $this->gol->add($blinker);
        $this->assertEquals($blinker, $this->gol->getAliveCoordinates());
        $this->gol->add($blinker);
        $this->assertEquals($blinker, $this->gol->getAliveCoordinates());
        $this->gol->add($square);
        $this->assertEquals($uniqueCoordinates = 5, count($this->gol->getAliveCoordinates()));
    }

    public function testGivenOneCoordinateAlreadyLiveICanCalculateTheAliveNeighbours()
    {
        $start = [1, 1];
        $blinker = [[1, 0], [1, 1], [1, 2]];
        $square = [ [3, 1], [3, 2], [4, 1], [4, 2]];

        $this->gol->add($blinker);
        $this->gol->add($square);

        $this->assertEquals($aliveNeighbours = 2, $this->gol->neighbours($start));
    }

    public function testGivenOneCoordinateDeadICanCalculateTheAliveNeighbours()
    {
        $start = [0, 1];
        $blinker = [[1, 0], [1, 1], [1, 2]];

        $this->gol->add($blinker);
        $this->assertEquals($aliveNeighbours = 3, $this->gol->neighbours($start));
    }

    public function testGivenOneCoordinatesIReceiveTheEightCandidatesNeighbours()
    {
        $start = [1, 1];

        $candidates = [
            [0, 0], [0, 1], [0, 2],
            [1, 0], [1, 2],
            [2, 0], [2, 1], [2, 2]
        ];

        $this->assertEquals($candidates, $this->gol->candidates($start));
    }

    public function testGivenALiveCellWithFewerThanTwoNeighboursTheCellDies()
    {
        $this->assertEquals(
            GameOfLife::DEAD,
            $this->gol->nextGeneration(GameOfLife::ALIVE, $neighbours = 0)
        );
        $this->assertEquals(
            GameOfLife::DEAD,
            $this->gol->nextGeneration(GameOfLife::ALIVE, $neighbours = 1)
        );
    }

    public function testGivenALiveCellWithTwoOrThreeNeighboursTheCellLives()
    {
        $this->assertEquals(
            GameOfLife::ALIVE,
            $this->gol->nextGeneration(GameOfLife::ALIVE, $neighbours = 2)
        );
        $this->assertEquals(
            GameOfLife::ALIVE,
            $this->gol->nextGeneration(GameOfLife::ALIVE, $neighbours = 3)
        );
    }

    public function testGivenALiveCellWithMoreThreeNeighboursTheCellDies()
    {
        $this->assertEquals(
            GameOfLife::DEAD,
            $this->gol->nextGeneration(GameOfLife::ALIVE, $neighbours = 4)
        );
        $this->assertEquals(
            GameOfLife::DEAD,
            $this->gol->nextGeneration(GameOfLife::ALIVE, $neighbours = 5)
        );
        $this->assertEquals(
            GameOfLife::DEAD,
            $this->gol->nextGeneration(GameOfLife::ALIVE, $neighbours = 6)
        );
        $this->assertEquals(
            GameOfLife::DEAD,
            $this->gol->nextGeneration(GameOfLife::ALIVE, $neighbours = 7)
        );
        $this->assertEquals(
            GameOfLife::DEAD,
            $this->gol->nextGeneration(GameOfLife::ALIVE, $neighbours = 8)
        );
    }

    public function testGivenADeadCellWithExactlyThreeNeighboursTheCellBecomeLive()
    {
        $this->assertEquals(
            GameOfLife::ALIVE,
            $this->gol->nextGeneration(GameOfLife::DEAD, $neighbours = 3)
        );
        $this->assertEquals(
            GameOfLife::DEAD,
            $this->gol->nextGeneration(GameOfLife::DEAD, $neighbours = 2)
        );
    }
}

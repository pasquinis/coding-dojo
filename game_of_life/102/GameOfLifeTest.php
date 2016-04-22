<?php

require_once 'GameOfLife.php';

class GameOfLifeTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->gol = new GameOfLife();
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

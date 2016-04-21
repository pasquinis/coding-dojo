<?php

require_once 'GameOfLife.php';

class GameOfLifeTest extends \PHPUnit_Framework_TestCase
{
    public function testGivenALiveCellWithFewerThanTwoNeighboursTheCellDies()
    {
        $gol = new GameOfLife();
        $this->assertEquals(
            GameOfLife::DEAD,
            $gol->nextGeneration(GameOfLife::ALIVE, $neighbours = 0)
        );
        $this->assertEquals(
            GameOfLife::DEAD,
            $gol->nextGeneration(GameOfLife::ALIVE, $neighbours = 1)
        );
    }
}

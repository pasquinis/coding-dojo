<?php

require_once 'GameOfLife.php';

class GameOfLifeTest extends \PHPUnit_Framework_TestCase
{
    public function testGivenALiveCellWithOneNeighboursTheCellDies()
    {
        $gol = new GameOfLife();
        $this->assertEquals(
            GameOfLife::DEAD,
            $gol->nextGeneration(GameOfLife::ALIVE, $neighbours = 1)
        );
    }
}

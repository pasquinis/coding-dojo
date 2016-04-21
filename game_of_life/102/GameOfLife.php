<?php

class GameOfLife
{

    const ALIVE = true;
    const DEAD = false;

    public function nextGeneration($currentStatus, $aliveNeighbours)
    {
        return self::DEAD;
    }
}

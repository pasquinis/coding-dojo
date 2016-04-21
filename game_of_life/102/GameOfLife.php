<?php

class GameOfLife
{

    const ALIVE = true;
    const DEAD = false;

    public function nextGeneration($currentStatus, $aliveNeighbours)
    {
        if(
            (2 <= $aliveNeighbours) &&
            ($aliveNeighbours <= 3)
        )
            return self::ALIVE;
        return self::DEAD;
    }
}

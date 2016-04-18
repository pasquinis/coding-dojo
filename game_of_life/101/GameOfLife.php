<?php

class GameOfLife
{
    const ALIVE = true;
    const DEAD = false;

    public function nextGeneration($cellStatus, $aliveNeighbours)
    {
        if((1 < $aliveNeighbours) && ($aliveNeighbours < 4))
            return self::ALIVE;
        return self::DEAD;
    }
}

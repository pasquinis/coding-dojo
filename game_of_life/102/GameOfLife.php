<?php

class GameOfLife
{

    const ALIVE = true;
    const DEAD = false;

    public function nextGeneration($currentStatus, $aliveNeighbours)
    {
        if($aliveNeighbours < 2)
            return self::DEAD;
        return self::ALIVE;
    }
}

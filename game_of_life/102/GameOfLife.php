<?php

class GameOfLife
{

    const ALIVE = true;
    const DEAD = false;

    public function nextGeneration($currentStatus, $aliveNeighbours)
    {
        if($currentStatus == self::ALIVE) {
            if(
                (2 <= $aliveNeighbours) &&
                ($aliveNeighbours <= 3)
            )
                return self::ALIVE;
            return self::DEAD;
        }
        if($currentStatus == self::DEAD) {
            if($aliveNeighbours == 3)
                return self::ALIVE;
            return self::DEAD;
        }
    }
}

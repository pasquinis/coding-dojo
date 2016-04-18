<?php

class GameOfLife
{
    const ALIVE = true;
    const DEAD = false;

    public function nextGeneration($cellStatus, $aliveNeighbours)
    {
        switch($cellStatus) {
            case self::ALIVE:
                if((1 < $aliveNeighbours) && ($aliveNeighbours < 4))
                    return self::ALIVE;
                return self::DEAD;
                break;
            case self::DEAD:
                if($aliveNeighbours == 3)
                    return self::ALIVE;
                return self::DEAD;
                break;
        }
    }
}

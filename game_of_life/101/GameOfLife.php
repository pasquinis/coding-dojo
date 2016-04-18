<?php

class GameOfLife
{
    const ALIVE = true;
    const DEAD = false;

    public function nextGeneration($alive, $neighbours)
    {
        if($neighbours < 2)
            return self::DEAD;
        return self::ALIVE;
    }
}

<?php

class GameOfLife
{
    const ALIVE = true;
    const DEAD = false;

    public function nextGeneration($cellStatus, $aliveNeighbours)
    {
        switch($cellStatus) {
            case self::ALIVE:
                return $this->neighboursAreBetweenTwoAndThree($aliveNeighbours);
                break;
            case self::DEAD:
                return $this->neighboursAreExactlyThree($aliveNeighbours);
                break;
        }
        return self::DEAD;
    }

    private function neighboursAreBetweenTwoAndThree($aliveNeighbours)
    {
        return (1 < $aliveNeighbours) && ($aliveNeighbours < 4);
    }

    private function neighboursAreExactlyThree($aliveNeighbours)
    {
        return $aliveNeighbours == 3;
    }
}

<?php

class GameOfLife
{

    const ALIVE = true;
    const DEAD = false;

    public function nextGeneration($currentStatus, $aliveNeighbours)
    {
        switch ($currentStatus) {
            case self::ALIVE:
                if ($this->isBetweenTo(2, 3, $aliveNeighbours))
                    return self::ALIVE;
                break;
            case self::DEAD:
                if($this->isBetweenTo(3, 3, $aliveNeighbours))
                    return self::ALIVE;
                break;
        }
        return self::DEAD;
    }

    public function candidates($start)
    {
        $x = $start[0];
        $y = $start[1];

        $candidates = [
            [$x - 1, $y - 1], [$x - 1, $y], [$x - 1, $y + 1],
            [$x, $y - 1], [$x, $y], [$x, $y + 1],
            [$x + 1, $y - 1], [$x + 1, $y], [$x + 1, $y + 1],
        ];

        return $candidates;
    }

    private function isBetweenTo($left, $right, $value) {
        return (($left <= $value) && ($value <= $right));
    }
}

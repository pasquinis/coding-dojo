<?php

class GameOfLife
{

    const ALIVE = true;
    const DEAD = false;
    private $aliveCoordinates = [];

    public function add($patterns)
    {
        $this->aliveCoordinates = array_unique(
            array_merge($this->aliveCoordinates, $patterns),
            SORT_REGULAR
        );
    }

    public function tick() {}

    public function generation()
    {
        return $expectedGeneration = [[0, 1], [1, 1], [2, 1]];
    }

    public function getAliveCoordinates()
    {
        return $this->aliveCoordinates;
    }

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

    public function neighbours($start)
    {
        $alive = 0;
        foreach ($this->getAliveCoordinates() as $aliveCoordinate) {
            foreach ($this->candidates($start) as $candidateCoordinate) {
                ($aliveCoordinate === $candidateCoordinate) ? $alive++ : $alive;
            }
        }
        return $alive;
    }

    public function candidates($start)
    {
        $x = $start[0];
        $y = $start[1];

        $candidates = [
            [$x - 1, $y - 1], [$x - 1, $y], [$x - 1, $y + 1],
            [$x, $y - 1], [$x, $y + 1],
            [$x + 1, $y - 1], [$x + 1, $y], [$x + 1, $y + 1],
        ];

        return $candidates;
    }

    private function isBetweenTo($left, $right, $value) {
        return (($left <= $value) && ($value <= $right));
    }
}

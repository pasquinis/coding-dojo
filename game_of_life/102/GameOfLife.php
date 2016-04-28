<?php

class GameOfLife
{

    const ALIVE = true;
    const DEAD = false;
    private $aliveCoordinates = [];
    private $futureGeneration = [];

    public function add($patterns)
    {
        $this->aliveCoordinates = array_unique(
            array_merge($this->aliveCoordinates, $patterns),
            SORT_REGULAR
        );
    }

    public function tick()
    {
        $this->futureGeneration = [];
        // scorrere gli aliveCoordinate e calcolare per ognuo se inserirli nella
        // future generation
        foreach ($this->getAliveCoordinates() as $coordinate) {
            $neighbours = $this->neighbours($coordinate);
            if ($this->nextGeneration(
                $this->isAlive($coordinate),
                $neighbours)
            ) {
                $this->addFuture($coordinate);
            }
            // per ogni candidato calcolare se inserirli nella futura generazione
            foreach ($this->candidates($coordinate) as $candidate) {
                $candidateNeighbours = $this->neighbours($candidate);
                if ($this->nextGeneration(
                    $this->isAlive($candidate),
                    $candidateNeighbours)
                ) {
                    $this->addFuture($candidate);
                }
            }
        }
        $this->aliveCoordinates = $this->futureGeneration;
    }

    public function generation()
    {
        return $this->getAliveCoordinates();
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

    public function isAlive($coordinate)
    {
       return in_array($coordinate, $this->getAliveCoordinates());
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

    private function addFuture($patterns)
    {
        $this->futureGeneration = array_unique(
            array_merge($this->futureGeneration, [ $patterns ]),
            SORT_REGULAR
        );
    }
    private function isBetweenTo($left, $right, $value) {
        return (($left <= $value) && ($value <= $right));
    }
}

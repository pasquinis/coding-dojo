<?php

class GameOfLife
{

    const ALIVE = true;
    const DEAD = false;
    const DEAD_SIGN = '.';

    private $aliveCoordinates = [];
    private $futureGeneration = [];

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

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
            if ($this->isStillAliveInTheNextGeneration(
                    $this->isAlive($coordinate),
                    $this->neighbours($coordinate)
                )
            ) {
                $this->addFuture($coordinate);
            }
            // per ogni candidato calcolare se inserirli nella futura generazione
            foreach ($this->candidates($coordinate) as $candidate) {
                if ($this->isStillAliveInTheNextGeneration(
                        $this->isAlive($candidate),
                        $this->neighbours($candidate)
                    )
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

    public function display()
    {
        $display = '';

        for ($i = 0; $i < $this->height; $i++) {
            $display .= PHP_EOL;
            for ($j = 0; $j < $this->width; $j++) {
                $display .= self::DEAD_SIGN;
            }
        }

        return $display;
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

    private function isStillAliveInTheNextGeneration($coordinate, $aliveNeighbours)
    {
        return $this->nextGeneration($coordinate, $aliveNeighbours);
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

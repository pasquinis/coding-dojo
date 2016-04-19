<?php

class GameOfLife
{
    const ALIVE = true;
    const DEAD = false;
    const DEAD_CELL = '.';
    const ALIVE_CELL = '*';

    public function __construct($width, $height)
    {
        $this->grid = $this->prepareEmptyGrid($width, $height);
    }

    public function grid()
    {
        return $this->heredocTheGrid($this->grid);
    }

    public function add(array $coordinates)
    {
        foreach($coordinates as $coordinate) {
            $this->grid[$coordinate[0]][$coordinate[1]] = self::ALIVE_CELL;
        }
    }

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

    public function neighbours($xCoordinate, $yCoordinate)
    {
        $count = 0;
        for($i = $xCoordinate - 1; $i <= $xCoordinate + 1; $i++) {
            for($j = $yCoordinate - 1; $j <= $yCoordinate + 1; $j++) {
                if (
                    $this->isAnAliveCell($i, $j) &&
                    $this->isNotTheCurrentCell($i, $j, $xCoordinate, $yCoordinate)
                ) {
                    $count++;
                }
            }
        }

        return $count;
    }

    private function isNotTheCurrentCell($i, $j, $xCoordinate, $yCoordinate)
    {
        return !(($i == $xCoordinate) && ($j == $yCoordinate));
    }

    private function isAnAliveCell($i, $j)
    {
        return (
            (isset($this->grid[$i][$j])) &&
            ($this->grid[$i][$j] == self::ALIVE_CELL)
        );
    }

    private function neighboursAreBetweenTwoAndThree($aliveNeighbours)
    {
        return (1 < $aliveNeighbours) && ($aliveNeighbours < 4);
    }

    private function neighboursAreExactlyThree($aliveNeighbours)
    {
        return $aliveNeighbours == 3;
    }

    private function heredocTheGrid($grid)
    {
        $stringGrid = '';
        $width = count($grid);
        $height = count($grid[0]);
        for($i = 0; $i < $width; $i++) {
            $stringGrid .= PHP_EOL;
            for($j = 0; $j < $height; $j++) {
                $stringGrid .= self::DEAD_CELL;
            }
        }

        return $stringGrid;
    }

    private function prepareEmptyGrid($width, $height)
    {
        $grid[] = [];
        for($i = 0; $i < $width; $i++) {
            for($j = 0; $j < $height; $j++) {
                $grid[$i][$j] = '.';
            }
        }
        return $grid;
    }
}

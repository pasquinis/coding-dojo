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
                if (isset($this->grid[$i][$j])) {
                    if ($this->grid[$i][$j] == self::ALIVE_CELL) {
                        $count++;
                    }
                }
            }
        }

        return $count;
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

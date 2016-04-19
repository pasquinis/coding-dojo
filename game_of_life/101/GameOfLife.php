<?php

class GameOfLife
{
    const ALIVE = true;
    const DEAD = false;
    const DEAD_CELL = '.';

    public function grid($width, $height)
    {
        $emptyGrid = $this->prepareEmptyGrid($width, $height);
        return $this->heredocTheGrid($emptyGrid);
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
        return 0;
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

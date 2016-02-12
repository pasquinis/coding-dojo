<?php

class PlayerA
{

    private $points;

    public function __construct()
    {
        $this->points = 0;
    }

    public function point($point)
    {
        $this->points += $point;
    }

    public function score()
    {
        return $this->points;
    }
}

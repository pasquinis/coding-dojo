<?php

abstract class PlayerScore
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

    public function points()
    {
        return $this->points;
    }

    public function score($opponent)
    {
        if (
            $this->points >= 4 &&
            ($this->points - $opponent) == 2
        ) {
            return 'wins';
        } 

        if (
            ($this->points == $opponent) &&
            ($this->points + $opponent) >= 6
        ) {
            return 'deuce';
        }

        if (($this->points + $opponent) > 6) {
            if (($this->points - $opponent) == 1) {
                return 'A-forty';
            }
        }

        return '';
    }
}

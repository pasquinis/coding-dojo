<?php

class Game
{
    private $score = 0;
    private $roll_history = [];

    public function __construct()
    {
        for($rollIndex = 0; $rollIndex < 21; $rollIndex++) {
            $this->roll_history[$rollIndex] = 0;
        }
    }

    public function roll($pins)
    {
        $this->score += $pins;
    }

    public function score()
    {
        return $this->score;
    }
}

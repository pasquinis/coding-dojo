<?php

class Game
{
    private $roll_history;
    private $rollIndex;

    public function __construct()
    {
        $this->rollIndex = 0;
        for($i = 0; $i < 21; $i++) {
            $this->roll_history[$i] = 0;
        }
    }

    public function roll($pins)
    {
        $this->roll_history[$this->rollIndex++] = $pins;
    }

    public function score()
    {
        $score = 0;
        $i = 0;
        for($frameIndex = 0; $frameIndex < 10; $frameIndex++) {
            $score += $this->roll_history[$i] + $this->roll_history[$i + 1];
            $i += 2;
        }

        return $score;
    }
}

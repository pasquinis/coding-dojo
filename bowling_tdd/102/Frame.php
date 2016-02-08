<?php

class Frame
{
    private $rollsHistory;
    private $bonus;

    public function __construct()
    {
        $this->bonus = 0;
    }

    public function roll($pinsDown)
    {
        $this->rollsHistory[] = $pinsDown;
    }

    public function score()
    {
        $score = 0;
        foreach($this->rollsHistory as $roll) {
            $score += $roll;
        }

        return $score;
    }

    public function terminated()
    {
        return count($this->rollsHistory) == 2;
    }

    public function isSpare()
    {
        return $this->score() == 10;
    }

    public function spareBonus($pinsDown)
    {
        $this->bonus = $pinsDown;
    }

    public function getBonus()
    {
        return $this->bonus;
    }
}

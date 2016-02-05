<?php

class Frame
{
    private $rollsHistory;
    private $bonus;
    private $spare;

    public function __construct($spare)
    {
        $this->bonus = 0;
        $this->spare = $spare;
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
        return $this->spare->isSpare($this->score());
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

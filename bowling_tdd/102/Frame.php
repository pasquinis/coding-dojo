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
        return (count($this->rollsHistory) == 2) or $this->isStrike();
    }

    public function isStrike()
    {
        return $this->rollsHistory[0] == 10;
    }

    public function isSpare()
    {
        return $this->score() == 10;
    }

    public function strikeBonus($firstRoll, $secondRoll)
    {
        return $firstRoll + $secondRoll;
    }

    public function spareBonus($pinsDown)
    {
        return $pinsDown;
    }

    public function getBonus()
    {
        return $this->bonus;
    }

    public function firstFrame()
    {
        return $this->rollsHistory[0];
    }

    public function secondFrame()
    {
        return $this->rollsHistory[1];
    }
}

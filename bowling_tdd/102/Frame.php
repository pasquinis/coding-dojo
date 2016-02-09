<?php

abstract class Frame
{
    protected $rollsHistory;

    public function score()
    {
        $score = 0;
        foreach($this->rollsHistory as $roll) {
            $score += $roll;
        }

        echo "OF partialBonus {$score}" . PHP_EOL;
        return $score;
    }

    public function roll($pinsDown)
    {
        $this->rollsHistory[] = $pinsDown;
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

    public function firstFrame()
    {
        return $this->rollsHistory[0];
    }

    public function secondFrame()
    {
        return isset($this->rollsHistory[1]) ? $this->rollsHistory[1] : 0;
    }

    public function computeBonus()
    {
        return $this->score();
    }
}

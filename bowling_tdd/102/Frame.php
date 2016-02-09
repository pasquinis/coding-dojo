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

        return $score;
    }

    public function roll($pinsDown)
    {
        $this->rollsHistory[] = $pinsDown;
    }
}

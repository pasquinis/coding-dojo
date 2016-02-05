<?php

class Frame
{
    private $rollsHistory;

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
}

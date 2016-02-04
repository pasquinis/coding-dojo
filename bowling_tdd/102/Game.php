<?php

class Game
{
    private $rollsHistory;

    public function roll($pinsDown)
    {
        $this->rollsHistory[] = $pinsDown;
    }

    public function score()
    {
        $result = 0;
        foreach($this->rollsHistory as $roll) {
            $result += $roll;
        }

        return $result;
    }
}

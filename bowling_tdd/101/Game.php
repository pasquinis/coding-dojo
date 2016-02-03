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
        $rollIndex = 0;
        for($frame = 0; $frame < 10; $frame++) {
            if ($this->isStrike($rollIndex)) {
                $score += 10 + $this->strikeBonus($rollIndex);
                $rollIndex++;
                continue;
            } 
            
            if ($this->isSpare($rollIndex)) {
                $score += 10 + $this->spareBonus($rollIndex);
                $rollIndex += 2;
                continue;
            } 

            if ($this->isOrdinaryFrame($rollIndex)) {
                $score += $this->roll_history[$rollIndex] + $this->roll_history[$rollIndex + 1];
                $rollIndex += 2;
            }
        }

        return $score;
    }

    private function isStrike($index)
    {
        return $this->roll_history[$index] == 10;
    }

    private function isSpare($index)
    {
        return $this->roll_history[$index] + $this->roll_history[$index + 1] == 10;
    }

    private function isOrdinaryFrame($index)
    {
        return true;
    }

    private function strikeBonus($index)
    {
        return $this->roll_history[$index + 1] + $this->roll_history[$index + 2];
    }

    private function spareBonus($index)
    {
        return $this->roll_history[$index + 2];
    }
}

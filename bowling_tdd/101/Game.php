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
            if ($this->roll_history[$rollIndex] == 10) {
                $score += 10 + $this->roll_history[$rollIndex + 1] + $this->roll_history[$rollIndex + 2];
                $rollIndex++;
            } elseif ($this->isSpare($rollIndex)) {
                $score += 10 + $this->spareBonus($rollIndex);
                $rollIndex += 2;
            } else {
                $score += $this->roll_history[$rollIndex] + $this->roll_history[$rollIndex + 1];
                $rollIndex += 2;
            }
        }

        return $score;
    }

    private function isSpare($index)
    {
        #print "i: {$index} rhi: {$this->roll_history[$index]} rhi+1: {$this->roll_history[$index + 1]}" . PHP_EOL;
        return $this->roll_history[$index] + $this->roll_history[$index + 1] == 10;
    }

    private function spareBonus($index)
    {
        #print "bonus: {$this->roll_history[$index + 2]}" . PHP_EOL;
        return $this->roll_history[$index + 2];
    }
}

<?php

class Game
{

    private $array_of_rolls = [];

    public function roll($pins)
    {
        $this->array_of_rolls[] = $pins;
    }

    public function score()
    {
        $total = 0;
        for($i = 0; $i < 20; $i++) {
            $bonus = 0;
            if ($this->isSpare($i)) {
                $bonus = $this->spareBonus($i);
            }
            $total += $this->actualRoll($i) + $bonus;
        }
        return $total;
    }

    private function isSpare($rollIdentifier)
    {
        $next = $this->isNextRollPresent($rollIdentifier) ? $this->nextRoll($rollIdentifier) : 0;
        return ($this->actualRoll($rollIdentifier) + $next) == 10;
    }

    private function spareBonus($rollIdentifier)
    {
        return $this->array_of_rolls[$rollIdentifier + 2];
    }

    private function actualRoll($rollIdentifier)
    {
        return $this->array_of_rolls[$rollIdentifier];
    }

    private function nextRoll($rollIdentifier)
    {
        return $this->array_of_rolls[$rollIdentifier + 1];
    }

    private function isNextRollPresent($rollIdentifier)
    {
        return isSet($this->array_of_rolls[$rollIdentifier + 1]);
    }
}

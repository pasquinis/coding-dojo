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
        for($i = 0; $i < 20; $i = $i + 2) {
            $bonus = 0;
            $actual = $this->actualRoll($i);
            $next = $this->nextRoll($i);
            #echo "identifier: $i actual: $actual, next: $next" . PHP_EOL;
            if ($this->isStrike($actual)) {
                $bonus = $this->strikeBonus($i);
                #echo "bonus $bonus" .PHP_EOL;
            } elseif ($this->isSpare($actual, $next)) {
                $bonus = $this->spareBonus($i);
            }
            $total += $actual + $next + $bonus;
            #echo "total: $total" . PHP_EOL;
        }
        return $total;
    }

    private function isStrike($actual)
    {
        return $actual == 10;
    }

    private function isSpare($actual, $next)
    {
        return ($actual + $next) == 10;
    }

    private function strikeBonus($rollIdentifier)
    {
       return $this->firstRollOfNextFrame($rollIdentifier) + $this->secondRollOfNextFrame($rollIdentifier);
    }

    private function spareBonus($rollIdentifier)
    {
        #echo "the bonus is " . $this->firstRollOfNextFrame($rollIdentifier) . " for roll:" . $rollIdentifier . PHP_EOL;
        return $this->firstRollOfNextFrame($rollIdentifier);
    }

    private function firstRollOfNextFrame($rollIdentifier)
    {
        return isSet($this->array_of_rolls[$rollIdentifier + 2]) ? $this->array_of_rolls[$rollIdentifier + 2] : 0;
    }

    private function secondRollOfNextFrame($rollIdentifier)
    {
        return isSet($this->array_of_rolls[$rollIdentifier + 3]) ? $this->array_of_rolls[$rollIdentifier + 3]: 0;
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

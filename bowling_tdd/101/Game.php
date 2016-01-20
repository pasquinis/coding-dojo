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
            $actual = $this->array_of_rolls[$i];
            $next = isSet($this->array_of_rolls[$i + 1]) ? $this->array_of_rolls[$i + 1] : 0;
            if (($actual + $next) == 10) {
                //is spare
                $bonus = $this->array_of_rolls[$i + 2];
            }
            $total += $actual + $bonus;
        }
        return $total;
    }
}

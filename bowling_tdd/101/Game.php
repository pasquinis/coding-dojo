<?php

class Game
{

    private  $actualScore = 0;

    public function roll($pins)
    {
        $this->actualScore += $pins;
    }

    public function score()
    {
        return $this->actualScore;
    }
}

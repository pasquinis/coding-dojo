<?php

class Frame
{
    private $firstRoll;
    private $secondRoll;

    public function __construct($firstRoll, $secondRoll)
    {
        $this->firstRoll = $firstRoll;
        $this->secondRoll = $secondRoll;
    }

    public function score()
    {
       return $this->firstRoll->score() + $this->secondRoll->score();
    }
}

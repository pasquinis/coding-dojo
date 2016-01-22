<?php

class Roll
{
    private $pins;

    public function __construct($pinsDown)
    {
        $this->pins = $pinsDown;
    }

    public function score()
    {
        return $this->pins;
    }
}

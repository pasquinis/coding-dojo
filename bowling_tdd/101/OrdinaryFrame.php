<?php

class OrdinaryFrame
{
    public function check($firstRoll, $secondRoll)
    {
        return true;
    }

    public function score($firstRoll, $secondRoll)
    {
        return $firstRoll + $secondRoll;
    }
}

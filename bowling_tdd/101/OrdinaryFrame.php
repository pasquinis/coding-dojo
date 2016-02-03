<?php

class OrdinaryFrame
{
    public function isOrdinaryFrame()
    {
        return true;
    }

    public function score($firstRoll, $secondRoll)
    {
        return $firstRoll + $secondRoll;
    }
}

<?php

class OrdinaryFrame
{
    public function check($firstRoll, $secondRoll)
    {
        return true;
    }

    public function score($rollIndex, $roll_history)
    {
	return $roll_history[$rollIndex] + $roll_history[$rollIndex + 1];
    }
}

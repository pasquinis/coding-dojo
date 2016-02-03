<?php

class Spare
{

    public function check($firstRoll, $secondRoll)
    {
        return $firstRoll + $secondRoll == 10;
    }

    public function score($rollIndex, $roll_history)
    {
	return 10 + $roll_history[$rollIndex + 2];
    }
}

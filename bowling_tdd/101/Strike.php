<?php

class Strike
{
    public function check($firstRoll, $secondRoll)
    {
	return $firstRoll == 10;
    }

    public function score($rollIndex, $roll_history)
    {
        return 10 + $roll_history[$rollIndex + 1] + $roll_history[$rollIndex + 2];
    }
}

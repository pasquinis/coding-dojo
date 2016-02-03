<?php

class Strike
{
    public function check($rollIndex, $roll_history)
    {
	return $roll_history[$rollIndex] == 10;
    }

    public function score($rollIndex, $roll_history)
    {
        return 10 + $roll_history[$rollIndex + 1] + $roll_history[$rollIndex + 2];
    }

    public function goAhead()
    {
	return 1;
    }
}

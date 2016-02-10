<?php

require_once('Rule.php');

class OrdinaryFrame implements Rule
{
    public function check($rollIndex, $roll_history)
    {
        return true;
    }

    public function score($rollIndex, $roll_history)
    {
        return $roll_history[$rollIndex] + $roll_history[$rollIndex + 1];
    }

    public function goAhead()
    {
        return 2;
    }
}

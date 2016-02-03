<?php

class Spare
{

    public function check($firstRoll, $secondRoll)
    {
        return $firstRoll + $secondRoll == 10;
    }

    public function score($nextFrame)
    {
        return 10 + $this->nextFrame;
    }

}

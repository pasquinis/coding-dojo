<?php

require_once('Frame.php');

class OrdinaryFrame extends Frame
{
    public function terminated()
    {
        return (count($this->rollsHistory) == 2) or $this->isStrike();
    }

    public function isStrike()
    {
        return $this->rollsHistory[0] == 10;
    }

    public function isSpare()
    {
        return $this->score() == 10;
    }

    public function strikeBonus($firstRoll, $secondRoll)
    {
        return $firstRoll + $secondRoll;
    }

    public function spareBonus($pinsDown)
    {
        return $pinsDown;
    }

    public function firstFrame()
    {
        return $this->rollsHistory[0];
    }

    public function secondFrame()
    {
        return $this->rollsHistory[1];
    }
}

<?php

require_once('Frame.php');

class OrdinaryFrame extends Frame
{
    public function terminated()
    {
        return (count($this->rollsHistory) == 2) or $this->isStrike();
    }
}

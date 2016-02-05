<?php

require_once('Frame.php');

class Game
{
    private $ball;
    public function __construct($frame)
    {
        $this->framesHistory[] = $this->previousFrame = $frame;
        $this->frameIndex = 0;
    }

    public function roll($pinsDown)
    {
        if ($this->previousFrame->terminated()) {
            $this->previousFrame = $this->istantiate($this->previousFrame);
            $this->frameIndex++;
        }
        $this->previousFrame->roll($pinsDown);
        $this->framesHistory[$this->frameIndex] = $this->previousFrame;
    }

    public function score()
    {
        $partialScore = 0;
        foreach($this->framesHistory as $frame) {
            $partialScore += $frame->score();
        }

        return $partialScore;
    }

    private function istantiate($class)
    {
        $typeOfclass = get_class($class);
        return new $typeOfclass;
    }
}

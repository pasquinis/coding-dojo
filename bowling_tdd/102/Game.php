<?php

require_once('Frame.php');

class Game
{
    private $ball;
    public function __construct()
    {
        $this->framesHistory[] = $this->previousFrame = new Frame();
        $this->frameIndex = 0;
    }

    public function roll($pinsDown)
    {
        if ($this->previousFrame->terminated()) {
            $this->previousFrame = new Frame();
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
}

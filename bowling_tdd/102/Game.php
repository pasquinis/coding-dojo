<?php

require_once('Frame.php');

class Game
{
    private $ball;
    private $frameIndex;
    private $spare;

    public function __construct(
        $frame,
        $spare
    )
    {
        $this->framesHistory[] = $this->previousFrame = $frame;
        $this->frameIndex = 0;
        $this->spare = $spare;
    }

    public function roll($pinsDown)
    {
        if ($this->previousFrame->terminated()) {
            if ($this->previousFrame->isSpare()) {
                $this->previousFrame->spareBonus($pinsDown);
                $this->framesHistory[$this->frameIndex] = $this->previousFrame;
            }
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
            $partialScore += $frame->score() + $frame->getBonus();
        }

        return $partialScore;
    }

    private function istantiate($class)
    {
        $typeOfclass = get_class($class);
        return new $typeOfclass($this->spare);
    }
}

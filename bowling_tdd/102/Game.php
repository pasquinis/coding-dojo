<?php

require_once('Frame.php');
require_once('OrdinaryFrame.php');

class Game
{
    private $ball;
    private $frameIndex;

    public function __construct(
        Frame $ordinaryFrame,
        Frame $finalFrame
    )
    {
        $this->framesHistory[] = $this->previousFrame = $ordinaryFrame;
        $this->finalFrame = $finalFrame;
        $this->frameIndex = 0;
    }

    public function roll($pinsDown)
    {
        if ($this->previousFrame->terminated()) {
            $this->frameIndex++;
            if ($this->isFinalFrame()) {
                $this->previousFrame = $this->finalFrame();
            } else {
                $this->previousFrame = $this->ordinaryFrame();
            }
        }
        $this->previousFrame->roll($pinsDown);
        $this->framesHistory[$this->frameIndex] = $this->previousFrame;
    }

    public function score()
    {
        $partialScore = 0;
        for($i = 0; $i < count($this->framesHistory); $i++) {
            $bonus = 0;
            if ($this->framesHistory[$i]->isStrike()) {
                if ($this->exsistsNextFrame($i)) {
                    $bonus = $this->framesHistory[$i + 1]->computeBonus();
                    if ($this->exsistsNextFrame($i + 1)) {
                        if ($this->framesHistory[$i + 2]->isStrike()) {
                            $bonus += $this->framesHistory[$i + 2]->firstFrame();
                        }
                    }
                }
            }
            if ($this->framesHistory[$i]->isSpare()) {
                $bonus =  $this->framesHistory[$i + 1]->firstFrame();
            }
            $partialScore += $this->framesHistory[$i]->score() + $bonus;
        }

        return $partialScore;
    }

    private function istantiate($class)
    {
        $typeOfclass = get_class($class);
        return new $typeOfclass();
    }

    private function isFinalFrame()
    {
        return $this->frameIndex == 9;
    }

    private function ordinaryFrame()
    {
        return $this->istantiate($this->previousFrame);
    }

    private function finalFrame()
    {
        return $this->istantiate($this->finalFrame);
    }

    private function exsistsNextFrame($i)
    {
        return isset($this->framesHistory[$i + 1]);
    }
}

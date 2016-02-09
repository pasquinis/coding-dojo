<?php

require_once('OrdinaryFrame.php');

class Game
{
    private $ball;
    private $frameIndex;

    public function __construct(
        $ordinaryFrame,
        $finalFrame
    )
    {
        $this->framesHistory[] = $this->previousFrame = $ordinaryFrame;
        $this->finalFrame = $finalFrame;
        $this->frameIndex = 0;
    }

    public function roll($pinsDown)
    {
        if ($this->previousFrame->terminated()) {
            if ($this->frameIndex == 8) {
                $this->previousFrame = $this->istantiate($this->finalFrame);
            } else {
                $this->previousFrame = $this->istantiate($this->previousFrame);
            }
            $this->frameIndex++;
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
                if ($i == 9) {
                    if ($this->framesHistory[$i]->isStrike()) {
                    }
                } elseif ($i == 8) {
                    $bonus = $this->framesHistory[$i + 1]->computeBonus();
                } else {
                    $bonus = $this->framesHistory[$i + 1]->computeBonus() + $this->framesHistory[$i + 2]->firstFrame();
                }
            }
            elseif ($this->framesHistory[$i]->isSpare()) {
                $bonus = $this->framesHistory[$i]->spareBonus(
                    $this->framesHistory[$i + 1]->firstFrame()
                );
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
}

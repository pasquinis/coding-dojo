<?php

require_once('OrdinaryFrame.php');

class Game
{
    private $ball;
    private $frameIndex;

    public function __construct(
        $frame
    )
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
        for($i = 0; $i < count($this->framesHistory); $i++) {
            $bonus = 0;
            if ($this->framesHistory[$i]->isStrike()) {
                $bonus = $this->framesHistory[$i]->strikeBonus(
                    $this->framesHistory[$i + 1]->firstFrame(),
                    $this->framesHistory[$i + 1]->secondFrame()
                );
            }
            else if ($this->framesHistory[$i]->isSpare()) {
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

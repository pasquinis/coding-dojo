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
                echo "decimo frame creo final frame" . PHP_EOL;
                $this->previousFrame = $this->istantiate($this->finalFrame);
            } else {
                echo "frame terminato ne creo uno nuovo" . PHP_EOL;
                $this->previousFrame = $this->istantiate($this->previousFrame);
            }
            $this->frameIndex++;
        }
        echo "frame non terminato aggiungo un roll" . PHP_EOL;
        $this->previousFrame->roll($pinsDown);
        $this->framesHistory[$this->frameIndex] = $this->previousFrame;
    }

    public function score()
    {
        var_dump($this->framesHistory);
        $partialScore = 0;
        for($i = 0; $i < count($this->framesHistory); $i++) {
            $bonus = 0;
            if ($this->framesHistory[$i]->isStrike()) {
                if ($i == 9) {
                    if ($this->framesHistory[$i]->isStrike()) {
                        #$bonus = $this->framesHistory[$i]->computeBonus();
                        #echo "decimo frame bonus $bonus " . PHP_EOL;
                    }
                } elseif ($i == 8) {
                    $bonus = $this->framesHistory[$i + 1]->computeBonus();
                    echo var_export($this->framesHistory[$i+1]).PHP_EOL;
                    echo "i=$i nono frame bonus $bonus " . PHP_EOL;
                } else {
                    $bonus = $this->framesHistory[$i + 1]->computeBonus() + $this->framesHistory[$i + 2]->computeBonus();
                    echo var_export($this->framesHistory[$i+1]) . var_export($this->framesHistory[$i+2]).PHP_EOL;
                    echo "i=$i strike frame bonus $bonus " . PHP_EOL;
                }
            }
            elseif ($this->framesHistory[$i]->isSpare()) {
                $bonus = $this->framesHistory[$i]->spareBonus(
                    $this->framesHistory[$i + 1]->firstFrame()
                );
            }
            echo "i=$i partial score {$this->framesHistory[$i]->score()} bonus $bonus " . PHP_EOL;
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

<?php

require_once('OrdinaryFrame.php');

class Game
{
    private $roll_history;
    private $rollIndex;
    private $ordinaryFrame;
    private $spare;
    private $stike;

    public function __construct(
	$ordinaryFrame,
	$spare,
        $strike
    ) {
        $this->rollIndex = 0;
        for($i = 0; $i < 21; $i++) {
            $this->roll_history[$i] = 0;
        }
        $this->ordinaryFrame = $ordinaryFrame;
	$this->spare = $spare;
        $this->strike = $strike;
    }

    public function roll($pins)
    {
        $this->roll_history[$this->rollIndex++] = $pins;
    }

    public function score()
    {
        $score = 0;
        $rollIndex = 0;
        for($frame = 0; $frame < 10; $frame++) {
            if ($this->strike->check(
			$this->roll_history[$rollIndex],
			$this->roll_history[$rollIndex + 1]
	       )
             ) {
                $score += $this->strike->score(
				$rollIndex,
				$this->roll_history
		);
                $rollIndex++;
                continue;
            } 
            
            if ($this->spare->check(
			$this->roll_history[$rollIndex],
			$this->roll_history[$rollIndex + 1]
	       )
	     ) {
                $score += $this->spare->score(
				$rollIndex,
				$this->roll_history
		);
                $rollIndex += 2;
                continue;
            } 

            if ($this->ordinaryFrame->check(
			$this->roll_history[$rollIndex],
			$this->roll_history[$rollIndex + 1]
	       )
	    ) {
                $score += $this->ordinaryFrame->score(
				$rollIndex,
				$this->roll_history
                );
                $rollIndex += 2;
            }
        }

        return $score;
    }

    private function strikeBonus($index)
    {
        return $this->roll_history[$index + 1] + $this->roll_history[$index + 2];
    }

}

<?php

require_once('OrdinaryFrame.php');

class Game
{
    private $roll_history;
    private $rollIndex;
    private $bowlingRules;

    public function __construct($bowlingRules) {
        $this->rollIndex = 0;
        $this->bowlingRules = $bowlingRules;
        $this->resetTheHistory();
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
        foreach($this->bowlingRules as $rule) {
        if ($rule->check(
                $rollIndex,
                $this->roll_history
           )
        ) {
                    $score += $rule->score(
                $rollIndex,
                $this->roll_history
            );
                    $rollIndex += $rule->goAhead();
            break;
        }
        }
        }

        return $score;
    }

    private function resetTheHistory()
    {
        for($i = 0; $i < 21; $i++) {
            $this->roll_history[$i] = 0;
        }
    }
}

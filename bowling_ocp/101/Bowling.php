<?php

require_once('Roll.php');

class Bowling
{
    private $roll_history = [];
    private $frame_history = [];

    public function roll($pins)
    {
        $this->roll_history[] = new Roll($pins);
    }

    public function score()
    {
        $score = 0;
        $counter = 0;
        for($frame = 0; $frame < 10; $frame++) {
            $score += $this->roll_history[$counter]->score() + $this->roll_history[$counter+1]->score();
            $counter += 2;
        }
        return $score;
    }
}

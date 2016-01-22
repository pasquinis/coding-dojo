<?php

require_once('Roll.php');
require_once('Frame.php');

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
        $this->composeTheFrameHistory();
        foreach($this->frame_history as $currentFrame) {
            $score += $currentFrame->score();
        }
        return $score;
    }

    private function composeTheFrameHistory()
    {
        $counter = 0;
        for($i = 0;$i < 10; $i++) {
            $this->frame_history[] = new Frame(
                $this->roll_history[$counter],
                $this->roll_history[$counter+1]
            );

            $counter +=2;
        }
    }
}

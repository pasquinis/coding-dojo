<?php

class TennisGame
{

    private $pointsPlayerA = 0;
    private $pointsPlayerB = 0;

    public function playerA($point) 
    {
        $this->pointsPlayerA += $point;
    }
    public function playerB($point)
    {
        $this->pointsPlayerB += $point;
    }

    public function score()
    {
        if (($this->pointsPlayerA + $this->pointsPlayerB) == 6) {
            return 'deuce';
        }
        
        if (($this->pointsPlayerA + $this->pointsPlayerB) > 6) {
            if (($this->pointsPlayerA - $this->pointsPlayerB) == 1) {
                return 'forty-A';
            }
        }

        $message = $this->computeScore($this->pointsPlayerA);
        $message .= '-';
        $message .= $this->computeScore($this->pointsPlayerB);

        return $message;
    }

    private function computeScore($player)
    {
        $message = '';
        switch($player) {
            case 0:
                $message .= 'love';
                break;
            case 1:
                $message .= 'fifteen';
                break;
            case 2:
                $message .= 'thirty';
                break;
            case 3:
                $message .= 'forty';
                break;
        }
        return $message;
    }
}

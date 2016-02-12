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
        if (
            $this->pointsPlayerA >= 4 &&
            ($this->pointsPlayerA - $this->pointsPlayerB) == 2
        ) {
            return 'playerA wins';
        } 

        if (
            $this->pointsPlayerB >= 4 &&
            ($this->pointsPlayerB - $this->pointsPlayerA) == 2
        ) {
            return 'playerB wins';
        }

        if (
            ($this->pointsPlayerA == $this->pointsPlayerB) &&
            ($this->pointsPlayerA + $this->pointsPlayerB) >= 6
        ) {
            return 'deuce';
        }

        if (($this->pointsPlayerA + $this->pointsPlayerB) > 6) {
            if (($this->pointsPlayerA - $this->pointsPlayerB) == 1) {
                return 'A-forty';
            } else {
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

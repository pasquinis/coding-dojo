<?php

class TennisGame
{

    private $playerA;
    private $playerB;

    public function __construct($playerA, $playerB)
    {
        $this->playerA = $playerA;
        $this->playerB = $playerB;
    }

    public function playerA($point) 
    {
        $this->playerA->point($point);
    }
    public function playerB($point)
    {
        $this->playerB->point($point);
    }

    public function score()
    {
        if (
            $this->playerA->score() >= 4 &&
            ($this->playerA->score() - $this->playerB->score()) == 2
        ) {
            return 'playerA wins';
        } 

        if (
            $this->playerB->score() >= 4 &&
            ($this->playerB->score() - $this->playerA->score()) == 2
        ) {
            return 'playerB wins';
        }

        if (
            ($this->playerA->score() == $this->playerB->score()) &&
            ($this->playerA->score() + $this->playerB->score()) >= 6
        ) {
            return 'deuce';
        }

        if (($this->playerA->score() + $this->playerB->score()) > 6) {
            if (($this->playerA->score() - $this->playerB->score()) == 1) {
                return 'A-forty';
            } else {
                return 'forty-A';
            }
        }

        $message = $this->computeScore($this->playerA->score());
        $message .= '-';
        $message .= $this->computeScore($this->playerB->score());

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

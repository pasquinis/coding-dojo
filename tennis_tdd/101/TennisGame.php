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
        $messageA = $this->playerA->score($this->playerB->points());
        if ($messageA != '') {
            return $messageA;
        }

        $messageB = $this->playerB->score($this->playerA->points());
        if ($messageB != '') {
            return $messageB;
        }

        $message = $this->computeScore($this->playerA->points());
        $message .= '-';
        $message .= $this->computeScore($this->playerB->points());

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

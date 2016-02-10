<?php

require_once('TennisGame.php');

class TennisGameTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->game = new TennisGame();
    }

    public function testTheScoreIsLoveLove()
    {
        $this->game->playerA(0);
        $this->game->playerB(0);

        $this->assertEquals('love-love', $this->game->score());
    }

    public function testTheScoreIsFifteenLove()
    {
        $this->game->playerA(1);
        $this->game->playerB(0);

        $this->assertEquals('fifteen-love', $this->game->score());
    }

    public function testTheScoreIsFifteenFifteen()
    {
        $this->game->playerA(1);
        $this->game->playerB(1);

        $this->assertEquals('fifteen-fifteen', $this->game->score());
    }

    public function testTheScoreIsThirtyThirty()
    {
        $this->game->playerA(1);
        $this->game->playerA(1);
        $this->game->playerB(1);
        $this->game->playerB(1);

        $this->assertEquals('thirty-thirty', $this->game->score());
    }

    public function testTheScoreIsFortyThirty()
    {
        $this->game->playerA(1);
        $this->game->playerA(1);
        $this->game->playerA(1);
        $this->game->playerB(1);
        $this->game->playerB(1);

        $this->assertEquals('forty-thirty', $this->game->score());
    }

    public function testTheScoreIsDeuce()
    {
        $this->game->playerA(1);
        $this->game->playerA(1);
        $this->game->playerA(1);
        $this->game->playerB(1);
        $this->game->playerB(1);
        $this->game->playerB(1);

        $this->assertEquals('deuce', $this->game->score());
    }

    public function testTheScoreFromDeuceToAdvantage()
    {
        $this->game->playerA(1);
        $this->game->playerA(1);
        $this->game->playerA(1);
        $this->game->playerA(1);
        $this->game->playerB(1);
        $this->game->playerB(1);
        $this->game->playerB(1);
        $this->assertEquals('forty-A', $this->game->score());
    }
}

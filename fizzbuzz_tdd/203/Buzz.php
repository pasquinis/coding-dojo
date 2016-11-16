<?php

require_once 'Rules.php';

class Buzz extends Rules
{
    public function isModule($dividend)
    {
        return $dividend % 5 == 0;
    }

    public function getWord()
    {
        return 'Buzz';
    }
}

<?php

require_once 'Rules.php';

class Fizz extends Rules
{
    public function isModule($dividend)
    {
        return $dividend % 3 == 0;
    }

    public function getWord()
    {
        return 'Fizz';
    }
}

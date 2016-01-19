<?php

require_once('Rule.php');

class BangRule implements Rule
{
    public function canApply($number)
    {
        return ($number % 7) == 0;
    }

    public function say($number)
    {
        return 'Bang';
    }
}

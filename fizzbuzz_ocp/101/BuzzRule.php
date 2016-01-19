<?php

require_once('Rule.php');

class BuzzRule implements Rule
{
    public function canApply($number)
    {
        return ($number % 5) == 0;
    }

    public function say($number)
    {
        return 'Buzz';
    }
}

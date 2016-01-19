<?php

require_once('Rule.php');

class FizzBangRule implements Rule
{
    public function canApply($number)
    {
        return (($number % 3) == 0) && (($number % 7) == 0);
    }

    public function say($number)
    {
        return 'FizzBang';
    }
}

<?php

require_once('Rule.php');

class FizzBuzzBangRule implements Rule
{
    public function canApply($number)
    {
        return (($number % 3) == 0) && (($number % 5) == 0) && (($number % 7) == 0);
    }

    public function say($number)
    {
        return 'FizzBuzzBang';
    }
}

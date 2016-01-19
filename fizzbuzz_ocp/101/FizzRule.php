<?php

require_once('Rule.php');

class FizzRule implements Rule
{
    public function canApply($number)
    {
        return ($number % 3) == 0;
    }

    public function say($number)
    {
        return 'Fizz';
    }
}

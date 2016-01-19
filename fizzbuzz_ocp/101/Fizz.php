<?php

class Fizz implements Rules
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

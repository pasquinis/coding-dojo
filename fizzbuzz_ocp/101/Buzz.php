<?php

class Buzz implements Rules
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

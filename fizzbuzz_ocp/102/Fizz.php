<?php

class Fizz
{

    public function canApplyIt($value)
    {
        return ($value % 3) == 0;
    }

    public function say($value)
    {
        return 'Fizz';
    }
}

<?php

class Fizz
{
    public function isMultipleOf($number)
    {
       return $number % 3 == 0;
    }

    public function say()
    {
        return 'Fizz';
    }
}

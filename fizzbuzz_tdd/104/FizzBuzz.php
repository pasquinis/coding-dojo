<?php

class FizzBuzz
{
    public function say($number)
    {
        if ($number % 3 == 0) {
            return 'Fizz';
        }

        if ($number == 5) {
            return 'Buzz';
        }
        return $number;
    }
}

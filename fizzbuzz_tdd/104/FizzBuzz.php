<?php

class FizzBuzz
{
    public function say($number)
    {
        if ($number % 3 == 0) {
            return 'Fizz';
        }

        if ($this->isMultipleOf($number, 5)) {
            return 'Buzz';
        }

        return $number;
    }


    private function isMultipleOf($number, $multiplier)
    {
        return $number % $multiplier == 0;
    }
}

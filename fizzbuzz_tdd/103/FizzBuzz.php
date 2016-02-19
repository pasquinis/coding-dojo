<?php

class FizzBuzz
{
    private $rules = [
        15 => 'FizzBuzz',
        3 => 'Fizz',
        5 => 'Buzz'
    ];

    public function say($number)
    {
        foreach($this->rules as $multiple => $word) {
            if ($number % $multiple == 0) {
                return $word;
            }
        }

        return $number;
    }
}

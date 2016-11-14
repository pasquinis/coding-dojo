<?php

class FizzBuzz
{

    public function __construct()
    {
        $this->rules = [
            3 => 'Fizz',
            5 => 'Buzz'
        ];
    }

    public function say($number)
    {
        $response = '';


        foreach($this->rules as $divisor => $word) {
            if ($number % $divisor == 0) {
                $response .= $word;
            }
        }

        if (!empty($response)) {
            return $response;
        }

        return $number;
    }
}

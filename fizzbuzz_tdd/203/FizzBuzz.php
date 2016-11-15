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
        $response = $this->getWord($number);

        if (!empty($response)) {
            return $response;
        }

        return $number;
    }

    private function getWord($number)
    {
        $response = '';

        foreach($this->rules as $divisor => $word) {
            if ($number % $divisor == 0) {
                $response .= $word;
            }
        }

        return $response;
    }
}

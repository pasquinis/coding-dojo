<?php

class FizzBuzz
{
    const EMPTY_WORD = '';

    public function __construct()
    {
        $this->rules = [3 => 'Fizz', 5 => 'Buzz'];
    }

    public function say($number)
    {
        $response = '';
        foreach ($this->rules as $divisor => $word) {
            $response .= ($number % $divisor == 0) ? $word : self::EMPTY_WORD;
        }

        if (!empty($response)) {
            return $response;
        }
        return $number;
    }
}

<?php

class FizzBuzz
{
    public function __construct() {
        $this->rules = [
            3 => 'Fizz',
            5 => 'Buzz',
        ];
    }

    public function say($number) {
        $answer = '';

        foreach ($this->rules as $divisor => $say) {
            if ($number % $divisor == 0) {
                $answer .= $say;
            }
        }

        if (!empty($answer)) {
            return $answer;
        }
        return $number;
    }
}

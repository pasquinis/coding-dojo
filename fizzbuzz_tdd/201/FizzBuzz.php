<?php

class FizzBuzz
{
    public function say($number) {
        $answer = '';
        if ($number % 3 == 0) {
            $answer .= 'Fizz';
        }

        if ($number % 5 == 0) {
            $answer .= 'Buzz';
        }

        if (!empty($answer)) {
            return $answer;
        }
        return $number;
    }
}

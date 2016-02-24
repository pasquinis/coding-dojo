<?php

class FizzBuzz
{
    public function say($number)
    {
        $message = '';
        if ($number % 3 == 0) {
            $message .= 'Fizz';
        }

        if ($number % 5 == 0) {
            $message .= 'Buzz';
        }

        if ($message != '') {
            return $message;
        }

        return $number;
    }
}

<?php

class FizzBuzz
{
    public function say($number)
    {
        $message = '';
        if ($this->isMultipleOf($number, 3)) {
            $message .= 'Fizz';
        }

        if ($this->isMultipleOf($number, 5)) {
            $message .= 'Buzz';
        }

        if ($message == '') {
            $message .= $number;
        }

        return $message;
    }


    private function isMultipleOf($number, $multiplier)
    {
        return $number % $multiplier == 0;
    }
}

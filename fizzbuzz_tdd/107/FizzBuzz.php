<?php

class FizzBuzz
{
    public function say($aNumber)
    {

        $message = '';

        if ($aNumber % 3 == 0) {
            $message .= 'Fizz';
        }

        if ($aNumber % 5 == 0) {
            $message .= 'Buzz';
        }

        if ($message != '') {
            return $message;
        }
        return $aNumber;
    }
}

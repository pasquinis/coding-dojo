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

        if ($aNumber % 7 == 0) {
            return 'Bang';
        }

        if ($message != '') {
            return $message;
        }

        return $aNumber;
    }
}

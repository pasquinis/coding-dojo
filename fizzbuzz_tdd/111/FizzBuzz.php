<?php

class FizzBuzz
{
    public function say($aNumber)
    {
        $word = '';
        if ($aNumber % 3 == 0) {
            $word .= 'Fizz';
        }

        if ($aNumber % 5 == 0) {
            $word .= 'Buzz';
        }

        if ($word != '') {
            return $word;
        }
        return $aNumber;
    }
}

<?php

class FizzBuzz
{
    public function say($aNumber)
    {
        if ($aNumber % 3 == 0) {
            return 'Fizz';
        }

        return $aNumber;
    }
}

<?php

class FizzBuzz
{
    public function say($aNumber)
    {
        if (($aNumber % 3) == 0) {
            return 'Fizz';
        }

        if (($aNumber % 5) == 0) {
            return 'Buzz';
        }

        return $aNumber;
    }
}

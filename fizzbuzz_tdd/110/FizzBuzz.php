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

        if (($aNumber % 7) == 0) {
            return 'Bang';
        }

        return $aNumber;
    }
}

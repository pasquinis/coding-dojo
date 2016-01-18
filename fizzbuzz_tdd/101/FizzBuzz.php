<?php

class FizzBuzz 
{

    public function say($number)
    {
        if ($this->isFizz($number))
            return 'Fizz';
        if ($this->isBuzz($number))
            return 'Buzz';
        return $number;
    }

    private function isFizz($number)
    {
        return (($number % 3) == 0);
    }

    private function isBuzz($number)
    {
        return (($number % 5) == 0);
    }
}

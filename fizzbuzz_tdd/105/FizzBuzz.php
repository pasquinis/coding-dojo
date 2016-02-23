<?php

class FizzBuzz
{

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function say()
    {
        if ($this->isMultipleOfThree()) {
            return 'Fizz';
        }

        if ($this->number % 5 == 0)
        {
            return 'Buzz';
        }

        return $this->number;
    }

    private function isMultipleOfThree()
    {
       return $this->number % 3 == 0;
    }
}

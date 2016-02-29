<?php

class FizzBuzz
{

    public function __construct()
    {
        $this->rules = [
            3 => 'Fizz',
            5 => 'Buzz',
            7 => 'Bang'
        ];
    }

    public function say($aNumber)
    {
        $message = '';

        foreach($this->rules as $multiplier => $word) {
           $message .= ($aNumber % $multiplier == 0) ? $word : '';
        }

        return ($message != '') ? $message : $aNumber;
    }
}

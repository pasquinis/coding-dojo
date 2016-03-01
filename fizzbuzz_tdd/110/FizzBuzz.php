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
            if (($aNumber % $multiplier) == 0) {
                $message .= $word;
            }
        }


        if ($message != '') {
            return $message;
        }

        return $aNumber;
    }
}

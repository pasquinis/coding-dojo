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

        $message = $this->multiplierAlgorithm($aNumber);

        if ($message != '') {
            return $message;
        }

        return $aNumber;
    }

    private function multiplierAlgorithm($aNumber)
    {
        $message = '';
        foreach($this->rules as $multiplier => $word) {
            if (($aNumber % $multiplier) == 0) {
                $message .= $word;
            }
        }
        return $message;
    }
}

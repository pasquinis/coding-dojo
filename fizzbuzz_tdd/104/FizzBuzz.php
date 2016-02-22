<?php

class FizzBuzz
{
    private $rules = [
        3 => 'Fizz',
        5 => 'Buzz'
    ];
    
    public function say($number)
    {
        $message = '';

        foreach($this->rules as $multiplier => $response) {
            if ($this->isMultipleOf($number, $multiplier)) {
                $message .= $response;
            }
        }

        if ($this->isEmpty($message)) {
            $message .= $number;
        }

        return $message;
    }


    private function isMultipleOf($number, $multiplier)
    {
        return $number % $multiplier == 0;
    }

    private function isEmpty($message)
    {
        return empty($message);
    }
}

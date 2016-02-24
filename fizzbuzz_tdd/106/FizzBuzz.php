<?php

class FizzBuzz
{
    public function __construct()
    {
        $this->rules = [
            3 => 'Fizz',
            5 => 'Buzz',
        ];
    }

    public function say($number)
    {
        $message = '';
        foreach($this->rules as $key => $value) {
          if ($number % $key == 0) {
              $message .= $value;
          }
        }

        if ($message != '') {
            return $message;
        }

        return $number;
    }
}

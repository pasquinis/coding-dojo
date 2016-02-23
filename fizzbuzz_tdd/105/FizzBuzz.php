<?php

require_once('Fizz.php');
require_once('Buzz.php');

class FizzBuzz
{

    public function __construct($number)
    {
        $this->number = $number;
        $this->rules = [
            new Fizz(),
            new Buzz()
        ];
    }

    public function say()
    {
        $message = '';

        foreach($this->rules as $rule) {
            if ($rule->isMultipleOf($this->number)) {
                $message .= $rule->say();
            }
        }

        if (!empty($message))
            return $message;

        return $this->number;
    }


}

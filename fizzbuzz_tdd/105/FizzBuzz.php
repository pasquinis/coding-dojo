<?php

require_once('Fizz.php');
require_once('Buzz.php');

class FizzBuzz
{

    public function __construct($number)
    {
        $this->number = $number;
        $this->fizz = new Fizz();
        $this->buzz = new Buzz();
    }

    public function say()
    {
        $message = '';
        if ($this->fizz->isMultipleOf($this->number)) {
            $message .= $this->fizz->say();
        }

        if ($this->buzz->isMultipleOf($this->number)) {
            $message .= $this->buzz->say();
        }

        if (!empty($message))
            return $message;

        return $this->number;
    }


}

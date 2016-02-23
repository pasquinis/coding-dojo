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
        if ($this->fizz->isMultipleOf($this->number)) {
            return $this->fizz->say();
        }

        if ($this->buzz->isMultipleOf($this->number)) {
            return $this->buzz->say();
        }

        return $this->number;
    }


}

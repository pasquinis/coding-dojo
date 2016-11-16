<?php

require 'Fizz.php';
require 'Buzz.php';

class FizzBuzz
{

    public function __construct()
    {
        $this->rules = [
            new Fizz(),
            new Buzz()
        ];
    }

    public function say($number)
    {
        $response = $this->getWord($number);

        if (!empty($response)) {
            return $response;
        }

        return $number;
    }

    private function getWord($number)
    {
        $response = '';

        foreach($this->rules as $rule) {
            if ($rule->isModule($number)) {
                $response .= $rule->getWord();
            }
        }

        return $response;
    }
}

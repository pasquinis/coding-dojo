<?php

namespace Kata;

class FizzBuzz {

    private $sequenceTo;

    public function __construct($sequenceTo) {
        $this->sequenceTo = $sequenceTo;
    }

    private function calculate($number) {

        if ($number % 3 == 0 && $number % 5 == 0) {
            return 'FizzBuzz';
        }

        if (preg_match("/[3]/", "${number}")) {
            return 'Fizz';
        }

        if (preg_match("/[5]/", "${number}")) {
            return 'Buzz';
        }

        if ($number % 3 == 0) {
            return 'Fizz';
        }

        if ($number % 5 == 0) {
            return 'Buzz';
        }

        return $number;
    }

    public function tell() {

        $response = '';
        for ($i=1; $i <= $this->sequenceTo; $i++) {
            $concat = $this->calculate($i);
            $response .= "$concat ";
        }

        return rtrim($response);
    }
}

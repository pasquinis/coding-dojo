<?php

namespace Kata;

class PrimeFactors {

    public function primes($number) {
        if ($number ==1) { 
            return [];
        }

        if ($this->aNumberIsPrime($number)) {
            return [$number];
        }
    }

    private function aNumberIsPrime($number) {
        if ($number > 1 && ($number % $number == 0)) {
            return true;
        }

        return false;
    }
}

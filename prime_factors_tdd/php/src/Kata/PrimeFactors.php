<?php

namespace Kata;

class PrimeFactors {

    public function primes($number) {
        if ($number ==1) {
            return [];
        }

        return $this->decomposeNumber($number);
    }


    public function decomposeNumber($number) {
        $arr = [];
        if ($number % 2 == 0) {
            $arr[] = 2;
        }
        if ($number % 3 == 0) {
            $arr[] = 3;
        }
        if ($number % 4 == 0) {
            $arr[] = 2;
        }

        return $arr;
    }

}

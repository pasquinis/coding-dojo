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

        while ($number % 2 == 0 ) {
            $arr[] = 2;
            $number /= 2;
        }

        while ($number % 3 == 0 ) {
            $arr[] = 3;
            $number /= 3;
        }

        if ($number % 5 == 0) {
            $arr[] = 5;
        }
        if ($number % 7 == 0) {
            $arr[] = 7;
        }

        return $arr;
    }

}

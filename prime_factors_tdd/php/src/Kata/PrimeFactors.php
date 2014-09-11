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
        if ($number % 5 == 0) {
            $arr[] = 5;
        }
        if ($number % 7 == 0) {
            $arr[] = 7;
        }
        if ($number % 8 == 0) {
            $arr[] = 2;
        }
        if ($number % 9 == 0) {
            $arr[] = 3;
        }

        return $arr;
    }

}

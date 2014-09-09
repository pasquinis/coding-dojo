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

    private function decomposeNumber($number) {
        $arr = [];
         for($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) {
                $arr[] = $i;
            }
        }
       return $arr;
    }

    private function removeOneAndSelfNumber($arr, $number) {
        for($i=0; $i <= count($number); $i++) {
            if ($arr[$i] == 1 || $arr[$i] == $number) {
                unset($arr[$i]);
            }
        }
        return $arr;
    }

    private function aNumberIsPrime($number) {
        $arr = $this->decomposeNumber($number);
        $arr = $this->removeOneAndSelfNumber($arr, $number);

        if (count($arr) == 0)
            return true;
        else
            return false;
    }
}

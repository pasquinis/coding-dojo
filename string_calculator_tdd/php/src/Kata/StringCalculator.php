<?php

namespace Kata;

class StringCalculator {

    public function add($number) {
        $integer = (int) $number;
        if ($integer <= 0) {
            return "";
        }

        return $number;
    }

}

<?php

namespace Kata;

class RomanNumerals {

    public function convert($integerValue) {

        switch($integerValue) {
            case 1:
                $obj = new RomanValuesOne();
                return $obj->toRoman();
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
        }
    }
}

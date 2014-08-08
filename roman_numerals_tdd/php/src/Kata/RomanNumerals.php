<?php

namespace Kata;

class RomanNumerals {

    public function convert($integerValue) {

        switch($integerValue) {
            case 1:
                return $obj = (new RomanValuesOne())->toRoman();
                break;
            case 2:
                return $obj = (new RomanValuesTwo())->toRoman();
                break;
            case 3:
                return $obj = (new RomanValuesThree())->toRoman();
                break;
            case 5:
                return $obj = (new RomanValuesFive())->toRoman();
                break;
            case 10:
                return $obj = (new RomanValuesTen())->toRoman();
                break;
        }
    }
}

<?php

namespace Kata;

class RomanNumerals {

    public function splitIntoElement($integerValue) {
        $splitted = [];
        if ($integerValue >= 10) {
            $explodedInteger = explode(".", ($integerValue/10));
            $splitted[] = (int) "${explodedInteger[0]}0";
            $splitted[] = (int) $explodedInteger[1];
        }

        return $splitted;
    }


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
            case 50:
                return $obj = (new RomanValuesFifty())->toRoman();
                break;
            case 100:
                return $obj = (new RomanValuesHundred())->toRoman();
                break;
        }

        if ($integerValue > 5) {
            $one = (new RomanValuesOne())->toRoman();
            $five = (new RomanValuesFive())->toRoman();
            return "$five$one";
        }
    }
}

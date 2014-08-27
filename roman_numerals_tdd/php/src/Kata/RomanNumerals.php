<?php

namespace Kata;

class RomanNumerals {

    public function splitIntoElement($integerValue) {
        $splitted = [];
        $stringValue = (string) $integerValue;
        for ($i=0; $i < strlen($stringValue); $i++) {
            $splitted[] = (int) ("${stringValue[$i]}".$this->addingZero(strlen($stringValue), $i));
        }

        return $splitted;
    }

    private function addingZero($totalOfCharacter, $position) {
        switch($totalOfCharacter - $position) {
            case 4:
                return '000';
            case 3:
                return '00';
            case 2:
                return '0';
        }
    }

    public function decomposeInteger($integerValue) {

    //TODO ricordare il caso valore 200 
        $decomposed = [];
        $integerValueMod = $integerValue;

        if ($integerValueMod >= 50) {
            $decomposed[] = 50;
            $integerValueMod = $integerValueMod - 50;
        }

        if ($integerValueMod >= 10){
            $decomposed[] = 10;
        }

        return $decomposed;
    }

    private function translateFromArabianToRoman($integerValue) {

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

    public function convert($integerValue) {

        $elements = $this->splitIntoElement($integerValue);
        $romanPhrase = '';
        foreach($elements as $element) {
            $romanPhrase .= $this->translateFromArabianToRoman($element);
        }

        return $romanPhrase;
    }
}

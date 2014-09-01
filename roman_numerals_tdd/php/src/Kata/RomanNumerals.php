<?php

namespace Kata;

class RomanNumerals {

    protected $decomposed = [];
    protected $integerValueMod;

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

    private function populateDecomposedArray($limit) {
        $integerString = "".$this->integerValueMod;
        $firstNumber = $integerString[0];
        for($i=0; $i < $firstNumber; $i++) {
            $this->decomposed[] = $limit;
            $this->integerValueMod = $this->integerValueMod - $limit;
        }
    }

    public function decomposeInteger($integerValue) {

        $this->integerValueMod = $integerValue;

        if ( $this->integerValueMod >= 1000 ) {
            $this->populateDecomposedArray(1000);
        }

        if ((1000 > $this->integerValueMod) && ($this->integerValueMod >= 500)) {
            $this->decomposed[] = 500;
            $this->integerValueMod = $this->integerValueMod - 500;
        }

        if (( 500 > $this->integerValueMod) && ($this->integerValueMod >= 100)) {
            $this->populateDecomposedArray(100);
        }

        if ($this->integerValueMod >= 50) {
            $this->decomposed[] = 50;
            $this->integerValueMod = $this->integerValueMod - 50;
        }

        if ($this->integerValueMod >= 10){
            $this->integerValueMod = $this->integerValueMod - 10;
            $this->decomposed[] = 10;
        }

        if ($this->integerValueMod != 0) {
            $this->decomposed[] = $this->integerValueMod;
        }

        return $this->decomposed;
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

        $elements = $this->decomposeInteger($integerValue);
        $romanPhrase = '';
        foreach($elements as $element) {
            $romanPhrase .= $this->translateFromArabianToRoman($element);
        }

        return $romanPhrase;
    }
}

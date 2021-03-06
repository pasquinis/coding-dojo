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
            $this->middleDecomposite($limit);
        }
    }

    private function middleDecomposite($value) {
         if ($this->integerValueMod >= $value) {
            $this->decomposed[] = $value;
            $this->integerValueMod = $this->integerValueMod - $value;
        }
    }

    public function decomposeInteger($integerValue) {

        $this->integerValueMod = $integerValue;

        if ( $this->integerValueMod >= 1000 ) {
            $this->populateDecomposedArray(1000);
        }

        $this->middleDecomposite(500);

        if (($this->integerValueMod >= 100)) {
            $this->populateDecomposedArray(100);
        }

        $this->middleDecomposite(100);
        $this->middleDecomposite(50);
        $this->middleDecomposite(10);
        $this->middleDecomposite(5);


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
            case 500:
                return $obj = (new RomanValuesFiveHundred())->toRoman();
                break;
            case 1000:
                return $obj = (new RomanValuesThousand())->toRoman();
                break;
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

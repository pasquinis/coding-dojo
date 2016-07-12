<?php

class RomanNumerals
{

    public function __construct($value)
    {
        $this->value = $value;
        $this->modifiedValue = $value;
        $this->translators = [
            50 => 'L',
            10 => 'X',
            5  => 'V',
            2  => 'II',
            1  => 'I'
        ];
    }

    public function toRomanNumerals()
    {
        $response = '';
        foreach($this->translators as $number => $letter) {
            if ($this->isPrimeRomanNumeral($number)) {
                $response .= $letter;
                $this->subtractPrimeRomanNumeralTo($number);
            }
            if ($this->isDivisibleFor($number)) {
                $response .= $letter;
                $this->subtractPrimeRomanNumeralTo($number);
            }
        }

        return $response;
    }

    private function isPrimeRomanNumeral($number)
    {
        return $this->modifiedValue == $number;
    }

    private function isDivisibleFor($number)
    {
        return ($this->modifiedValue / $number) > 1;
    }

    private function subtractPrimeRomanNumeralTo($number)
    {
        $this->modifiedValue -= $number;
    }
}

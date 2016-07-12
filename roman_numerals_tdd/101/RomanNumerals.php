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
                $this->modifiedValue -= $number;
            }
            if (($this->modifiedValue / $number) > 1) {
                $response .= $letter;
                $this->modifiedValue = $this->modifiedValue - $number;
            }
        }

        return $response;
    }

    private function isPrimeRomanNumeral($number)
    {
        return $this->modifiedValue == $number;
    }
}

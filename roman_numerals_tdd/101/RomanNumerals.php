<?php

class RomanNumerals
{

    public function __construct($value)
    {
        $this->value = $value;
        $this->translators = [
            1   => 'I',
            5   => 'V',
            10  => 'X'
        ];
    }

    public function toRomanNumerals()
    {
        foreach($this->translators as $number => $letter) {
            if ($this->value == $number) {
                return $letter;
            }
        }
    }
}

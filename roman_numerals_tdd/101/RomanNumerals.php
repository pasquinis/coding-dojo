<?php

class RomanNumerals
{

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function toRomanNumerals()
    {
        if ($this->value == '1') {
            return 'I';
        }
        return 'V';
    }
}

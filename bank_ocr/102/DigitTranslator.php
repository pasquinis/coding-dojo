<?php

class DigitTranslator
{

    const ONE =
        "   " .
        "  |" .
        "  |";

    const TWO =
        " _ " .
        " _|" .
        "|_ ";

    public function translateDigitToNumber($aDigit)
    {
        if ($aDigit == self::ONE) return 1;
        if ($aDigit == self::TWO) return 2;
    }
}

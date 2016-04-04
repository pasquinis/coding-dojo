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

    const THREE =
        " _ " .
        " _|" .
        " _|";

    public function translateDigitToNumber($aDigit)
    {
        if ($aDigit == self::ONE) return 1;
        if ($aDigit == self::TWO) return 2;
        if ($aDigit == self::THREE) return 3;
    }
}

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

    const FOUR =
        "   " .
        "|_|" .
        "  |";

    const FIVE =
        " _ " .
        "|_ " .
        " _|";

    const SIX =
        " _ " .
        "|_ " .
        "|_|";

    const SEVEN =
        " _ " .
        "  |" .
        "  |";

    public function translateDigitToNumber($aDigit)
    {
        if ($aDigit == self::ONE) return 1;
        if ($aDigit == self::TWO) return 2;
        if ($aDigit == self::THREE) return 3;
        if ($aDigit == self::FOUR) return 4;
        if ($aDigit == self::FIVE) return 5;
        if ($aDigit == self::SIX) return 6;
        if ($aDigit == self::SEVEN) return 7;
    }
}

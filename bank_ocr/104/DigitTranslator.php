<?php

class DigitTranslator
{
    const ILLEGIBLE_NUMBER = '?';

    const ZERO =
        " _ " .
        "| |" .
        "|_|";

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

    const EIGHT =
        " _ " .
        "|_|" .
        "|_|";

    const NINE =
        " _ " .
        "|_|" .
        " _|";

    public function __construct()
    {
        $this->arrayOfScouts = [
            self::ZERO => 0,
            self::ONE => 1,
            self::TWO => 2,
            self::THREE => 3,
            self::FOUR => 4,
            self::FIVE => 5,
            self::SIX => 6,
            self::SEVEN => 7,
            self::EIGHT => 8,
            self::NINE => 9
        ];
    }

    public function translateDigitToNumber($aDigit)
    {
        foreach($this->arrayOfScouts as $digit => $number) {
            if ($digit == $aDigit) {
                return $number;
            }
        }

        return self::ILLEGIBLE_NUMBER;
    }
}

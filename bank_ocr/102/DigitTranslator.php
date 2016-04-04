<?php

class DigitTranslator
{

    public function __construct()
    {
        $this->one =
            "   " .
            "  |" .
            "  |";

        $this->two =
            " _ " .
            " _|" .
            "|_ ";
    }

    public function translateDigitToNumber($aDigit)
    {
        if ($aDigit == $this->one) return 1;
        if ($aDigit == $this->two) return 2;
    }
}

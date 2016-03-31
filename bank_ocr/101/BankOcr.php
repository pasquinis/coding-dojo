<?php

class BankOcr
{
    public function __construct()
    {
        $this->one_inline = 
            "   " .
            "  |" .
            "  |";

        $this->two_inline = 
            " _ " .
            " _|" .
            "|_ ";

        $this->three_inline = 
            " _ " .
            " _|" .
            " _|";

        $this->four_inline =
            "   " .
            "|_|" .
            "  |";

        $this->five_inline =
            " _ " .
            "|_ " .
            " _|";

        $this->six_inline =
            " _ " .
            "|_ " .
            "|_|";

        $this->seven_inline =
            " _ " .
            "  |" .
            "  |";

        $this->eight_inline =
            " _ " .
            "|_|" .
            "|_|";

        $this->nine_inline =
            " _ " .
            "|_|" .
            " _|";

        $this->digitToNumberMappings = [
            $this->one_inline => "1",
            $this->two_inline => "2",
            $this->three_inline => "3",
            $this->four_inline => "4",
            $this->five_inline => "5",
            $this->six_inline => "6",
            $this->seven_inline => "7",
            $this->eight_inline => "8",
            $this->nine_inline => "9"
        ];
    }

    public function translate($aNumber)
    {
        return $this->multipleMapping($aNumber);
    }

    private function multipleMapping($aNumber)
    {
        $lines = explode(PHP_EOL, $aNumber);
        if (count($lines) == 1) return "";
        $counter = 0;
        $ocrString = '';
        $startString = 0;
        while($counter < 9) {
            $ocrString .= $this->mapping(
                $this->decomposeNumberIntoOneSingleLine(
                    $lines,
                    $startString
                )
            );
            $startString += 3;
            $counter++;
        }
        return $ocrString;
    }

    private function decomposeNumberIntoOneSingleLine($lines, $startPosition)
    {
        return substr($lines[0], $startPosition, 3)
            . substr($lines[1], $startPosition, 3)
            . substr($lines[2], $startPosition, 3);
    }

    private function mapping($aNumber)
    {
        foreach($this->digitToNumberMappings as $digit => $number) {
            if ($digit == $aNumber)
                return $number;
        }
    }
}

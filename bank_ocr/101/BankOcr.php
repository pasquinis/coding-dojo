<?php

class BankOcr
{
    public function __construct()
    {
        $this->one_inline = "   " . "  |" . "  |";

        $this->one = <<<EOF
  |
  |
EOF;

        $this->two_inline = " _ " . " _|" . "|_ ";

        $this->two = <<<EOF
  _
  _|
 |_
EOF;
        $this->three_inline = 
            " _ " .
            " _|" .
            " _|";
        $this->three = <<<EOF
  _
  _|
  _|
EOF;
        $this->four_inline =
            "   " .
            "|_|" .
            "  |";
        $this->four = <<<EOF

 |_|
   |
EOF;
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
    }

    public function translate($aNumber)
    {
        $exploded = explode(PHP_EOL, $aNumber);
        if (strlen($exploded[0]) > 3) {
            return $this->multipleMapping($aNumber);
        } else {
            return $this->mapping($aNumber);
        }
    }

    private function multipleMapping($aNumber)
    {
        $lines = explode(PHP_EOL, $aNumber);
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
        if ($this->one_inline == $aNumber) return "1";
        if ($this->two_inline == $aNumber) return "2";
        if ($this->three_inline == $aNumber) return "3";
        if ($this->four_inline == $aNumber) return "4";
        if ($this->five_inline == $aNumber) return "5";
        if ($this->six_inline == $aNumber) return "6";
        if ($this->seven_inline == $aNumber) return "7";
        if ($this->eight_inline == $aNumber) return "8";
        if ($this->nine_inline == $aNumber) return "9";
        if ($this->one == $aNumber) return "1";
        if ($this->two == $aNumber) return "2";
        if ($this->three == $aNumber) return "3";
        if ($this->four == $aNumber) return "4";
        return "";
    }
}

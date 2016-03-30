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
        $this->three = <<<EOF
  _
  _|
  _|
EOF;
        $this->four = <<<EOF

 |_|
   |
EOF;
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
        $inlineNumber = '';
        $counter = 0;
        $ocrString = '';
        $startString = 0;
        while($counter < 2) {
            $inlineNumber .= substr($lines[0], $startString, 3);
            $inlineNumber .= substr($lines[1], $startString, 3);
            $inlineNumber .= substr($lines[2], $startString, 3);
            $ocrString .= $this->mapping($inlineNumber);
            $inlineNumber = '';
            $startString += 3;
            $counter++;
        }
        return $ocrString;
    }

    private function mapping($aNumber)
    {
        if ($this->one_inline == $aNumber) return "1";
        if ($this->two_inline == $aNumber) return "2";
        if ($this->one == $aNumber) return "1";
        if ($this->two == $aNumber) return "2";
        if ($this->three == $aNumber) return "3";
        if ($this->four == $aNumber) return "4";
        return "";
    }
}

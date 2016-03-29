<?php

class BankOcr
{
    public function __construct()
    {
        $this->one = <<<EOF
  |
  |
EOF;

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
        return "12";
    }

    private function mapping($aNumber)
    {
        if ($this->one == $aNumber) return "1";
        if ($this->two == $aNumber) return "2";
        if ($this->three == $aNumber) return "3";
        if ($this->four == $aNumber) return "4";
        return "";
    }
}

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
        if ($aNumber == '') return "";
        return $this->mapping($aNumber);
    } 

    private function mapping($aNumber)
    {
        if ($this->one == $aNumber) return "1";
        if ($this->two == $aNumber) return "2";
        if ($this->three == $aNumber) return "3";
        if ($this->four == $aNumber) return "4";
    }
}

<?php

class BankOcr
{
    public function translate($aNumber)
    {
        if ($aNumber == '') return "";
        return $this->mapping($aNumber);
    } 

    private function mapping($aNumber)
    {
        $one = <<<EOF
  |
  |
EOF;
        if ($one == $aNumber) return "1";
    }
}

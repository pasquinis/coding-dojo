<?php

require_once 'BankOcr.php';

class BankOcrTest extends \PHPUnit_Framework_TestCase
{
    public function testWhenIInputNothingTheResponseIsNothing()
    {
        $bankOcr = new BankOcr();
        $this->assertEquals("", $bankOcr->translate(""));
    }

    public function testWhenIInputOneTheResponseIsAStringWithOne()
    {
        $bankOcr = new BankOcr();
        $one = <<<EOF
  |
  |
EOF;
        $this->assertEquals("1", $bankOcr->translate($one));
    }
}

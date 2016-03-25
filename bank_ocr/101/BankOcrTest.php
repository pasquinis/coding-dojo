<?php

require_once 'BankOcr.php';

class BankOcrTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->bankOcr = new BankOcr();
        $this->one = <<<EOF
  |
  |
EOF;
    }

    public function testWhenIInputNothingTheResponseIsNothing()
    {
        $this->assertEquals("", $this->bankOcr->translate(""));
    }

    public function testWhenIInputOneTheResponseIsAStringWithOne()
    {
        $this->assertEquals("1", $this->bankOcr->translate($this->one));
    }
}

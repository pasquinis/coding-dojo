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
        $this->two = <<<EOF
  _
  _|
 |_
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

    public function testWhenIInputTwoTheResponseIsAStringWithTwo()
    {
        $this->assertEquals("2", $this->bankOcr->translate($this->two));
    }
}

<?php

require_once 'BankOcr.php';

class BankOcrTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->bankOcr = new BankOcr();
        $this->allNineDigits = <<<EOF
    _  _     _  _  _  _  _ 
  | _| _||_||_ |_   ||_||_|
  ||_  _|  | _||_|  ||_| _|
EOF;
    }

    public function testWhenIInputNothingTheResponseIsNothing()
    {
        $this->assertEquals("", $this->bankOcr->translate(""));
    }

    public function testShouldIReadAllNineDigits()
    {
        $this->assertEquals("123456789", $this->bankOcr->translate($this->allNineDigits));
    }
}

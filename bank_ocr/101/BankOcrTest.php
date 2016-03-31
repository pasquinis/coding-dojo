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

    public function testWhenIInputNothingTheResponseIsNothing()
    {
        $this->assertEquals("", $this->bankOcr->translate(""));
    }

    public function testWhenIInpuntASingleNumberTheResponseIAStringWithTheNumber()
    {
        $this->assertEquals("1", $this->bankOcr->translate($this->one));
        $this->assertEquals("2", $this->bankOcr->translate($this->two));
        $this->assertEquals("3", $this->bankOcr->translate($this->three));
        $this->assertEquals("4", $this->bankOcr->translate($this->four));
    }

    public function testShouldIReadTwoNumber()
    {
        $oneAndTwo = <<<EOF
    _ 
  | _|
  ||_ 
EOF;
        $this->assertEquals("12", $this->bankOcr->translate($oneAndTwo));
    }

    public function testShouldIReadThreeNumber()
    {
        $oneTwoThree = <<<EOF
    _  _ 
  | _| _|
  ||_  _|
EOF;

        $this->assertEquals("123", $this->bankOcr->translate($oneTwoThree));
    }

    public function testShouldIReadAllNineDigits()
    {
        $allNineDigits = <<<EOF
    _  _     _  _  _  _  _ 
  | _| _||_||_ |_   ||_||_|
  ||_  _|  | _||_|  ||_| _|
EOF;
        $this->assertEquals("123456789", $this->bankOcr->translate($allNineDigits));
    }
}

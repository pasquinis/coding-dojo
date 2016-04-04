<?php

require_once 'BankOcr.php';
require_once 'DigitTranslator.php';

class BankOcrTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->bank = new BankOcr();
        $this->digitTranslator = new DigitTranslator();

        $this->bankAccount = <<<ACCOUNT
    _  _     _  _  _  _  _ 
  | _| _||_||_ |_   ||_||_|
  ||_  _|  | _||_|  ||_| _|
ACCOUNT;
        $this->bankAccountWithOnlyNumberOne = <<<ONE
                           
  |  |  |  |  |  |  |  |  |
  |  |  |  |  |  |  |  |  |
ONE;
        $this->bankAccountWithOnlyNumberTwo = <<<TWO
 _  _  _  _  _  _  _  _  _ 
 _| _| _| _| _| _| _| _| _|
|_ |_ |_ |_ |_ |_ |_ |_ |_ 
TWO;
    }

    public function testShouldIReadABankAccount()
    {
        $this->assertEquals('123456789', $this->bank->read($this->bankAccount));
    }

    public function testShouldIReadABankAccountComposedOnlyOneDigit()
    {
        $this->assertEquals('111111111', $this->bank->read($this->bankAccountWithOnlyNumberOne));
    }

    public function testShouldIReadABankAccountComposedOnlyTwoDigit()
    {
        $this->assertEquals('222222222', $this->bank->read($this->bankAccountWithOnlyNumberTwo));
    }

    public function testShouldIReadDigitAtSpecificPosition()
    {
        $numberOne = 
            "   " .
            "  |" .
            "  |";

        $this->assertEquals($numberOne, $this->bank->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 0));
        $this->assertEquals($numberOne, $this->bank->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 1));
        $this->assertEquals($numberOne, $this->bank->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 2));
        $this->assertEquals($numberOne, $this->bank->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 3));
        $this->assertEquals($numberOne, $this->bank->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 4));
        $this->assertEquals($numberOne, $this->bank->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 5));
        $this->assertEquals($numberOne, $this->bank->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 6));
        $this->assertEquals($numberOne, $this->bank->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 7));
        $this->assertEquals($numberOne, $this->bank->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 8));
    }

    public function testShouldTranslateADigitToNumber()
    {
        $one = 
            "   " .
            "  |" .
            "  |";
        $two =
            " _ " .
            " _|" .
            "|_ ";

        $this->assertEquals(1, $this->digitTranslator->translateDigitToNumber($one));
        $this->assertEquals(2, $this->digitTranslator->translateDigitToNumber($two));
    }
}

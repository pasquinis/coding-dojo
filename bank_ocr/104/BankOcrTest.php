<?php

require_once 'BankOcr.php';
require_once 'DigitTranslator.php';
require_once 'DigitReader.php';
require_once 'DigitChecksum.php';

class BankOcrTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->digitTranslator = new DigitTranslator();
        $this->digitReader = new DigitReader();
        $this->digitChecksum = new DigitChecksum();
        $this->bank = new BankOcr(
            $this->digitReader,
            $this->digitTranslator,
            $this->digitChecksum
        );


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

    public function testShouldValidateACorrectBankAccount()
    {
        #  '3  4  5  8  8  2  8  6  5';
        $validAccountNumber = <<<VALID
 _     _  _  _  _  _  _  _ 
 _||_||_ |_||_| _||_||_ |_ 
 _|  | _||_||_||_ |_||_| _|
VALID;
        $this->assertTrue($this->bank->validate($validAccountNumber));
    }

    public function testShouldFindANotValidBankAccount()
    {
        $notValidAccountNumber = <<<NOTVALID
                           
  |  |  |  |  |  |  |  |  |
  |  |  |  |  |  |  |  |  |
NOTVALID;
        $this->assertFalse($this->bank->validate($notValidAccountNumber));
    }

    public function testShouldCalculateAccountChecksumAndTheModulusIsZero()
    {
        $accountNumber = '345882865';
        $this->assertEquals(0, $this->digitChecksum->checksum($accountNumber));
    }

    public function testShouldCalculateNotValidAccountNumberAndTheModulusIsZero()
    {
        $accountNumber = '111111111';
        $this->assertNotEquals(0, $this->digitChecksum->checksum($accountNumber));
    }

    public function testShouldPrintAOnlyAccountNumberIfIsValid()
    {
        # 457508000
        $validAccountNumber = <<<VALID
    _  _  _  _  _  _  _  _ 
|_||_   ||_ | ||_|| || || |
  | _|  | _||_||_||_||_||_|
VALID;
        $this->assertEquals('457508000', $this->bank->accountStatus($validAccountNumber));
    }

    public function testShouldPrintERRInformationForNotValidBankAccount()
    {
        # 664371495
        $notValidAccountNumber = <<<NOTVALID
 _  _     _  _        _  _ 
|_ |_ |_| _|  |  ||_||_||_ 
|_||_|  | _|  |  |  | _| _|
NOTVALID;
        $this->assertEquals('664371495 ERR', $this->bank->accountStatus($notValidAccountNumber));
    }

    public function testShouldPrintILLInformatinIfBankAccountContainsIllegibleCharacter()
    {
        #86110??36 ILL
        $illegibleAccountNumber = <<<ILLEGIBLE
 _  _        _  _  _  _  _ 
|_||_   |  || || || | _||_ 
|_||_|  |  ||_||    | _||_|
ILLEGIBLE;

        $this->assertEquals('#86110??36 ILL', $this->bank->accountStatus($illegibleAccountNumber));
    }

    public function testShouldIReadDigitAtSpecificPosition()
    {
        $numberOne = 
            "   " .
            "  |" .
            "  |";

        $this->assertEquals($numberOne, $this->digitReader->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 0));
        $this->assertEquals($numberOne, $this->digitReader->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 1));
        $this->assertEquals($numberOne, $this->digitReader->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 2));
        $this->assertEquals($numberOne, $this->digitReader->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 3));
        $this->assertEquals($numberOne, $this->digitReader->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 4));
        $this->assertEquals($numberOne, $this->digitReader->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 5));
        $this->assertEquals($numberOne, $this->digitReader->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 6));
        $this->assertEquals($numberOne, $this->digitReader->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 7));
        $this->assertEquals($numberOne, $this->digitReader->readDigitAtPosition($this->bankAccountWithOnlyNumberOne, $position = 8));
    }

    public function testShouldTranslateADigitToNumber()
    {
        $this->assertEquals(0, $this->digitTranslator->translateDigitToNumber(
            DigitTranslator::ZERO
        ));

        $this->assertEquals(1, $this->digitTranslator->translateDigitToNumber(
            DigitTranslator::ONE
        ));

        $this->assertEquals(2, $this->digitTranslator->translateDigitToNumber(
            DigitTranslator::TWO
        ));

        $this->assertEquals(3, $this->digitTranslator->translateDigitToNumber(
            DigitTranslator::THREE
        ));

        $this->assertEquals(4, $this->digitTranslator->translateDigitToNumber(
            DigitTranslator::FOUR
        ));

        $this->assertEquals(5, $this->digitTranslator->translateDigitToNumber(
            DigitTranslator::FIVE
        ));

        $this->assertEquals(6, $this->digitTranslator->translateDigitToNumber(
            DigitTranslator::SIX
        ));

        $this->assertEquals(7, $this->digitTranslator->translateDigitToNumber(
            DigitTranslator::SEVEN
        ));

        $this->assertEquals(8, $this->digitTranslator->translateDigitToNumber(
            DigitTranslator::EIGHT
        ));

        $this->assertEquals(9, $this->digitTranslator->translateDigitToNumber(
            DigitTranslator::NINE
        ));
    }
}

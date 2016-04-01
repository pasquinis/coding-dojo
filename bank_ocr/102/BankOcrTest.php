<?php

require_once 'BankOcr.php';

class BankOcrTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->bankAccount = <<<ACCOUNT
    _  _     _  _  _  _  _ 
  | _| _||_||_ |_   ||_||_|
  ||_  _|  | _||_|  ||_| _|
ACCOUNT;
    }

    public function testShouldIReadABankAccount()
    {
        $bank = new BankOcr();
        $this->assertEquals('123456789', $bank->read($this->bankAccount));
    }
}

<?php

require_once 'BankOcr.php';

class BankOcrTest extends \PHPUnit_Framework_TestCase
{
    public function testWhenIInputNothingTheResponseIsNothing()
    {
        $bankOcr = new BankOcr();
        $this->assertEquals("", $bankOcr->translate());
    }
}

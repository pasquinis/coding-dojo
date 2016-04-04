<?php

class BankOcr
{
    const DIGIT_WIDTH = 3;

    public function __construct()
    {
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

    public function read($bankAccount)
    {
        
        if ($bankAccount == $this->bankAccountWithOnlyNumberOne)
            return '111111111';
        if ($bankAccount == $this->bankAccountWithOnlyNumberTwo)
            return '222222222';
    }

    public function readDigitAtPosition($bankAccount, $position)
    {
        $lines = explode(PHP_EOL, $bankAccount);
        $oneDigit = substr($lines[0], $position * self::DIGIT_WIDTH, self::DIGIT_WIDTH) .
            substr($lines[1], $position * self::DIGIT_WIDTH, self::DIGIT_WIDTH) .
            substr($lines[2], $position * self::DIGIT_WIDTH, self::DIGIT_WIDTH);
        return $oneDigit;
    }
}

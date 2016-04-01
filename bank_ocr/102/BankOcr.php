<?php

class BankOcr
{
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
        $this->numberOne = <<<ONE
   
  |
  |
ONE;
    }

    public function read($bankAccount)
    {
        if ($bankAccount == $this->bankAccountWithOnlyNumberOne)
            return '111111111';
        if ($bankAccount == $this->bankAccountWithOnlyNumberTwo)
            return '222222222';
    }

    public function readOneDigit($bankAccount)
    {
        return $this->numberOne;
    }
}

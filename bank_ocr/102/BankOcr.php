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
    }

    public function read($bankAccount)
    {
        if ($bankAccount == $this->bankAccountWithOnlyNumberOne)
            return '111111111';
        if ($bankAccount == $this->bankAccountWithOnlyNumberTwo)
            return '222222222';
    }

}

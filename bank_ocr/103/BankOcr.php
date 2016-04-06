<?php

require_once 'DigitTranslator.php';
require_once 'DigitReader.php';

class BankOcr
{

    public function __construct(
        DigitReader $reader,
        DigitTranslator $translator
    )
    {
        $this->reader = $reader;
        $this->translator = $translator;
    }

    public function read($bankAccount)
    {
        $bankAccountToReturn = '';
        for ($i = 0; $i < 9; $i++) {
            $inlineNumber = $this->reader->readDigitAtPosition(
                $bankAccount,
                $i
            );
           $bankAccountToReturn .= $this->translator->translateDigitToNumber($inlineNumber);
        }
        return $bankAccountToReturn;
    }

    public function checksum($accountNumber)
    {
        $accountNumberSplitted = str_split($accountNumber);
        $half_sum = 0;
        foreach($accountNumberSplitted as $index => $value) {
            $half_sum += (9 - $index) * (int) $value;
        }
        return $half_sum % 11;
    }

}

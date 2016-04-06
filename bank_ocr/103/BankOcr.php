<?php

require_once 'DigitTranslator.php';
require_once 'DigitReader.php';
require_once 'DigitChecksum.php';

class BankOcr
{

    public function __construct(
        DigitReader $reader,
        DigitTranslator $translator,
        DigitChecksum $checksum
    )
    {
        $this->reader = $reader;
        $this->translator = $translator;
        $this->checksum = $checksum;
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
        return $this->checksum->checksum($accountNumber);
    }
}

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

}

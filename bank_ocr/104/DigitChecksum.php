<?php

class DigitChecksum
{
    const ACCOUNT_LENGHT = 9;
    const WRONG_CHECKSUM = ' ERR';
    const OK_CHECKSUM = '';
    const ILLEGIBLE_CHECKSUM = ' ILL';

    public function checksum($accountNumber)
    {
        $accountNumberSplitted = str_split($accountNumber);
        $half_sum = 0;
        foreach($accountNumberSplitted as $index => $value) {
            $half_sum += (self::ACCOUNT_LENGHT - $index) * (int) $value;
        }
        return $half_sum % 11;
    }

    public function status($accountNumber)
    {
        if ($this->isIllegibleAccount($accountNumber)) {
            return self::ILLEGIBLE_CHECKSUM;
        }

        if ($this->isWrongChecksum($accountNumber)) {
            return self::WRONG_CHECKSUM;
        };

        return self::OK_CHECKSUM;
    }

    public function compatible($aNumber)
    {
        if ($aNumber == 0)
            return [8];
    }

    private function isIllegibleAccount($accountNumber)
    {
        return strpos($accountNumber, '?') !== false;
    }

    private function isWrongChecksum($accountNumber)
    {
        return $this->checksum($accountNumber) != 0;
    }
}

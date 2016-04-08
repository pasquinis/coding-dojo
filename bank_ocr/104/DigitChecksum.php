<?php

class DigitChecksum
{
    const ACCOUNT_LENGHT = 9;
    const WRONG_CHECKSUM = ' ERR';
    const OK_CHECKSUM = '';

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
        if (strpos($accountNumber, '?') !== false) {
            return ' ILL';
        }

        if ($this->checksum($accountNumber) != 0) {
            return self::WRONG_CHECKSUM;
        };

        return self::OK_CHECKSUM;
    }
}

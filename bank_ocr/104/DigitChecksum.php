<?php

class DigitChecksum
{
    const ACCOUNT_LENGHT = 9;
    const WRONG_CHECKSUM = ' ERR';
    const OK_CHECKSUM = '';
    const ILLEGIBLE_CHECKSUM = ' ILL';

    public function __construct()
    {
        $this->compatibleNumbers = [
            0 => [8],
            1 => [7],
            3 => [9],
            5 => [6, 9],
            6 => [8],
            7 => [1],
            8 => [0],
            9 => [5, 8]
        ];
    }

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

    public function alternatives($aDigitNumber)
    {
        $arrayAccountNumber = null;
        preg_match_all("/\w/", $aDigitNumber, $arrayAccountNumber);
        $pos = 0;
        $possibleAccountNumber = [];
        foreach($arrayAccountNumber[0] as $character) {
            $alternative = $this->compatible($character)[0];
            $modifiedADigitNumber = $aDigitNumber;
            $modifiedADigitNumber[$pos] = $alternative;
            $possibleAccountNumber[] = $modifiedADigitNumber;
            $pos++;
        }

        $definitivePossibleAccount = [];
        foreach($possibleAccountNumber as $account) {
            if ($this->status($account) == '') {
                $definitivePossibleAccount[] = $account;
            }
        }
        return $definitivePossibleAccount;
    }

    public function compatible($aNumber)
    {
        foreach($this->compatibleNumbers as $key => $value) {
            if ($aNumber == $key)
                return $value;
        }

        return [ $aNumber ];
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

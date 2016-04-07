<?php

class DigitReader
{
    const DIGIT_WIDTH = 3;

    public function readDigitAtPosition($bankAccount, $position)
    {
        $lines = explode(PHP_EOL, $bankAccount);
        $oneDigit = substr($lines[0], $position * self::DIGIT_WIDTH, self::DIGIT_WIDTH) .
            substr($lines[1], $position * self::DIGIT_WIDTH, self::DIGIT_WIDTH) .
            substr($lines[2], $position * self::DIGIT_WIDTH, self::DIGIT_WIDTH);
        return $oneDigit;
    }
}

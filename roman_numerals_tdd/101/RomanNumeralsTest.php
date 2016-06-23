<?php

require_once 'RomanNumerals.php';

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{

    public function testIAbleToConvertMajorRomanLetters()
    {
        $given = 1;
        $converter = new RomanNumerals($given);

        $this->assertEquals('I', $converter->toRomanNumerals());

        $given = 5;
        $converter = new RomanNumerals($given);

        $this->assertEquals('V', $converter->toRomanNumerals());

        $given = 10;
        $converter = new RomanNumerals($given);

        $this->assertEquals('X', $converter->toRomanNumerals());
    }
}

<?php

require_once 'RomanNumerals.php';

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{

    public function testICanConvertNumberOneToRomanNumber()
    {
        $given = '1';
        $converter = new RomanNumerals($given);

        $this->assertEquals('I', $converter->toRomanNumerals());
    }

    public function testICanConvertNumberFiveToRomanNumber()
    {
        $given = '5';
        $converter = new RomanNumerals($given);

        $this->assertEquals('V', $converter->toRomanNumerals());
    }
}

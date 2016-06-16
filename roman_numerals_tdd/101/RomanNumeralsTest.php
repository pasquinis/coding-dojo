<?php

require_once 'RomanNumeral.php';

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{

    public function testICanConvertNumberOneToRomanNumber()
    {
        $given = '1';
        $converter = new RomanNumerals($given);

        $this->assertEquals('I', $converter->toRomanNumerals());
    }
}

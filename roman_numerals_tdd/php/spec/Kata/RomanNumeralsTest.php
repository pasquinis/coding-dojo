<?php

namespace Kata;

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase {

    public function testOneNumberIsIRomanNumber() {
        $obj = new RomanNumerals();
        $this->assertEquals("I", $obj->convert(1));
    }

    public function testTwoNumberIsIIRomanNumber() {
        $obj = new RomanNumerals();
        $this->assertEquals("II", $obj->convert(2));
    }

    public function testThreeNumberIsIIIRomanNumber() {
        $obj = new RomanNumerals();
        $this->assertEquals("III", $obj->convert(3));
    }

    public function testFiveNumberIsVRomanNumber() {
        $obj = new RomanNumerals();
        $this->assertEquals("V", $obj->convert(5));
    }

    public function testTenNumberIsXRomanNumber() {
        $obj = new RomanNumerals();
        $this->assertEquals("X", $obj->convert(10));
    }
}

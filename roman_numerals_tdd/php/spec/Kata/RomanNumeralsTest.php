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

    public function testSixNumberIsVIRomanNumber() {
        $obj = new RomanNumerals();
        $this->assertEquals("VI", $obj->convert(6));
    }

    public function testFiftyNumberIsLRomanNumber() {
        $obj = new RomanNumerals();
        $this->assertEquals("L", $obj->convert(50));
    }

    public function testHundredNumberIsLRomanNumber() {
        $obj = new RomanNumerals();
        $this->assertEquals("C", $obj->convert(100));
    }

    public function testCanIConvert1066ToMLXVI() {
        $this->markTestIncomplete("not operative");
        $obj = new RomanNumerals();
        $this->assertEquals("MLXVI", $obj->convert(1066));
    }

    public function testCanISplitANumberWithTwoIntegerIntoTwoElement() {
        $obj = new RomanNumerals();
        $expect = [ 60, 7];
        $this->assertEquals($expect, $obj->splitIntoElement(67));
    }

    public function testCanISplitANumberWithThreeIntegerIntoThreeElement() {
        $obj = new RomanNumerals();
        $expect = [ 100, 60, 7];
        $this->assertEquals($expect, $obj->splitIntoElement(167));
    }

    public function testCanISplitANumberWithFourIntegerIntoFourElement() {
        $obj = new RomanNumerals();
        $expect = [ 1000, 0, 60, 6];
        $this->assertEquals($expect, $obj->splitIntoElement(1066));
    }
    
    public function testCanISplitANumberWithOneIntegerIntoOneElement() {
        $obj = new RomanNumerals();
        $expect = [10, 0];
        $this->assertEquals($expect, $obj->splitIntoElement(10));
    }

}

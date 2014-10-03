<?php

namespace Kata;

class BerlinClockTest extends \PHPUnit_Framework_TestCase {

    public function setUp() {
        $this->obj = new BerlinClock();
    }

    public function testHappyPathWhenTimeIsmidnight() {
        $expected = [
            "0000",
            "0000",
            "00000000000",
            "0000",
        ];
        $this->assertEquals($expected, $this->obj->time("00::00::00"));
    }

    public function testDisplayATime13_17_01() {
        $this->markTestIncomplete("need real implementation");
         $expected = [
            "RR00",
            "RRR0",
            "YYR00000000",
            "YY00",
        ];
        $this->assertEquals($expected, $this->obj->time("13::17::01"));
    }

    public function testICanConvertTwentyHour() {
        $expected = "RRRR";
        $this->assertEquals($expected, $this->obj->firstRow(20));
    }


}

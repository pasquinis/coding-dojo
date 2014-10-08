<?php

namespace Kata;

class BerlinClockTest extends \PHPUnit_Framework_TestCase {

    public function setUp() {
        $this->obj = new BerlinClock();
    }

    public function testHappyPathWhenTimeIsmidnight() {
        $expected = [
            "OOOO",
            "OOOO",
            "OOOOOOOOOOO",
            "OOOO",
        ];
        $this->assertEquals($expected, $this->obj->time("00::00::00"));
    }

    public function testDisplayATime13_17_01() {
        $this->markTestIncomplete("need real implementation");
         $expected = [
            "RROO",
            "RRRO",
            "YYROOOOOOOO",
            "YYOO",
        ];
        $this->assertEquals($expected, $this->obj->time("13::17::01"));
    }

    public function testICanConvertTwentyHour() {
        $expected = "RRRR";
        $this->assertEquals($expected, $this->obj->firstRow(20));
    }

    public function testICanConvertFifteenHourForTheFirtstRow() {
        $expected = "RRRO";
        $this->assertEquals($expected, $this->obj->firstRow(15));
    }

    public function testICanConvertThirteenHourForTheFirtstRow() {
        $expected = "RROO";
        $this->assertEquals($expected, $this->obj->firstRow(13));
    }

    public function testICanConvertThreeHourForTheSecondRow() {
        $expected = "RRRO";
        $this->assertEquals($expected, $this->obj->secondRow(13));
    }

    public function testICanConvertSeventeenMinuteForTheThird() {
        $expected = "YYROOOOOOOO";
        $this->assertEquals($expected, $this->obj->thirdRow(17));
    }

}

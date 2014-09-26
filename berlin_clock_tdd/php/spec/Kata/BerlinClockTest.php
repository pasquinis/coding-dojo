<?php

namespace Kata;

class BerlinClockTest extends \PHPUnit_Framework_TestCase {

    public function testHappyPathWhenTimeIsmidnight() {
        $obj = new BerlinClock();
        $expected = [
            "0000",
            "0000",
            "00000000000",
            "0000",
        ];
        $this->assertEquals($expected, $obj->time("00:00:00"));
    }

}

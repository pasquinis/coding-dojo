<?php

namespace Kata;

class BerlinClock {

    protected $itsAQuarterMultiple = 2;

    public function time($timeToDisplay) {

        return [
            "OOOO",
            "OOOO",
            "OOOOOOOOOOO",
            "OOOO",
        ];
    }

    private function isNotTheFirstElement($position) {
        return $position != 0;
    }

    private function fillTheRowMinutesMask($numberOfBlockToBeRed) {
        $toReturn = "OOOOOOOOOOO";
        for ($i=0; $i<$numberOfBlockToBeRed; $i++) {
            if ($i % $this->itsAQuarterMultiple == 0 &&
                $this->isNotTheFirstElement($i)
            ) {
                $toReturn[$i] = 'R';
            } else {
                $toReturn[$i] = 'Y';
            }
        }

        return $toReturn;
    }

    public function firstRow($hour) {
        $row = new Row("OOOO", floor($hour/5));
        return $row->fill();
    }

    public function secondRow($hour) {
        $row = new Row("OOOO", floor($hour%5));
        return $row->fill();
    }

    public function thirdRow($minute) {
        return $this->fillTheRowMinutesMask(floor($minute/5));
    }
}

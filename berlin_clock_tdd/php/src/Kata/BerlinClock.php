<?php

namespace Kata;

class BerlinClock {


    public function time($timeToDisplay) {

        return [
            "OOOO",
            "OOOO",
            "OOOOOOOOOOO",
            "OOOO",
        ];
    }

    private function fillTheRowMinutesMask($numberOfBlockToBeRed) {
   }

    public function firstRow($hour) {
        $row = new RowWithFourElement("OOOO", floor($hour/5));
        return $row->fill();
    }

    public function secondRow($hour) {
        $row = new RowWithFourElement("OOOO", floor($hour%5));
        return $row->fill();
    }

    public function thirdRow($minute) {
        $row = new RowWithElevenElement("OOOOOOOOOOO", floor($minute/5));
        return $row->fill();
    }
}

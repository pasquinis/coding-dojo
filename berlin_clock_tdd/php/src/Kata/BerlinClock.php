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

    private function fillTheRowMask($numberOfBlockToBeRed) {
        $toReturn = "OOOO";
        for ($i=0; $i<$numberOfBlockToBeRed; $i++) {
            $toReturn[$i] = 'R';
        }

        return $toReturn;
    }

    public function firstRow($hour) {
        return $this->fillTheRowMask(floor($hour/5));
    }

    public function secondRow($hour) {
        return $this->fillTheRowMask(floor($hour%5));
    }
}

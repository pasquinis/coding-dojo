<?php

namespace Kata;

class BerlinClock {

    public function time($timeToDisplay) {

        return [
            "0000",
            "0000",
            "00000000000",
            "0000",
        ];
    }

    public function firstRow($hour) {
        $numberOfBlockToBeRed = floor($hour/5);
        $toReturn = '0000';
        for($i=0; $i<$numberOfBlockToBeRed; $i++) {
            $toReturn[$i] = 'R';
        }
        return $toReturn;
    }
}

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
        $numberOfBlockToBeRed = $hour/5;
        $toReturn = '';
        for($i=0; $i<$numberOfBlockToBeRed; $i++) {
            $toReturn .= 'R';
        }
        return $toReturn;
    }
}

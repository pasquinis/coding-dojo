<?php

namespace Kata;

class RowWithElevenElement {
    protected $maskToFill;
    protected $numberOfConsecutiveFieldToFill;
    protected $itsAQuarterMultiple = 2;

    function __construct($maskToFill, $numberOfConsecutiveFieldToFill) {
        $this->maskToFill = $maskToFill;
        $this->numberOfConsecutiveFieldToFill = $numberOfConsecutiveFieldToFill;
    }

    private function isNotTheFirstElement($position) {
        return $position != 0;
    }

    public function fill() {
        $toReturn = $this->maskToFill;

        for ($i=0; $i<$this->numberOfConsecutiveFieldToFill; $i++) {
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
}

<?php

namespace Kata;

class RowWithFourElement
{
    protected $maskToFill;
    protected $numberOfConsecutiveFieldToFill;

    function __construct($maskToFill, $numberOfConsecutiveFieldToFill) {
        $this->maskToFill = $maskToFill;
        $this->numberOfConsecutiveFieldToFill = $numberOfConsecutiveFieldToFill;
    }

    public function fill() {
        $toReturn = $this->maskToFill;
        for ($i=0; $i<$this->numberOfConsecutiveFieldToFill; $i++) {
            $toReturn[$i] = 'R';
        }
        return $toReturn;
    }
}

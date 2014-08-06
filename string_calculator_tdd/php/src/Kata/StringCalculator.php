<?php

namespace Kata;

class StringCalculator {

    public function add($numbers) {
        $values = explode(",", $numbers);

        if (empty($values[0])) {
            return "";
        }

        $total = 0;
        foreach($values as $value) {
            $total += $value;
        }

        return $total;
    }

}

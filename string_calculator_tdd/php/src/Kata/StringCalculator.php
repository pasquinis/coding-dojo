<?php

namespace Kata;

class StringCalculator {

    public function add($numbers) {
        $managedNumbers = str_replace("\n", ",", $numbers);
        $values = explode(",", $managedNumbers);
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

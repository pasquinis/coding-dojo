<?php

class SelectionSort
{
    public function sort($unsorted)
    {
        for ($j = 0; $j < count($unsorted); $j++) {
            $iMin = $j;
            for ($i = $j + 1; $i < count($unsorted); $i++) {
                if ($unsorted[$i] < $unsorted[$iMin]) {
                    $temp = $unsorted[$iMin];
                    $unsorted[$iMin] = $unsorted[$i];
                    $unsorted[$i] = $temp;
                }
            }
        }
        return $unsorted;
    }
}

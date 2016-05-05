<?php

class SelectionSort
{
    public function sort($unsorted)
    {
        for ($j = 0; $j < count($unsorted); $j++) {
            $iMin = $j;
            for ($i = $j + 1; $i < count($unsorted); $i++) {
                if ($unsorted[$i] < $unsorted[$iMin]) {
                    $iMin = $i;
                }
                $temp = $unsorted[$j];
                $unsorted[$j] = $unsorted[$iMin];
                $unsorted[$iMin] = $temp;
            }
        }
        return $unsorted;
    }
}

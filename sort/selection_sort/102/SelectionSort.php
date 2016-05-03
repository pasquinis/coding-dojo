<?php

class SelectionSort
{
    public function sort(array $unsorted)
    { 
        for ($j = 0; $j < count($unsorted); $j++) {
            $iMin = $j;
            for ($i = 1 + $j; $i < count($unsorted); $i++) {
                if ($unsorted[$i] < $unsorted[$iMin]) {
                    $iMin = $i;
                }
                $temp = $unsorted[$iMin];
                $unsorted[$iMin] = $unsorted[$j];
                $unsorted[$j] = $temp;
            }
        }

        return $unsorted;
    }
}

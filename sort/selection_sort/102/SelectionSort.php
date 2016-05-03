<?php

class SelectionSort
{
    public function sort(array $unsorted)
    {
       for ($j = 0; $j < count($unsorted); $j++) {
            for ($i = 1 + $j; $i < count($unsorted); $i++) {
                if ($unsorted[$i] < $unsorted[$j]) {
                    $temp = $unsorted[$j];
                    $unsorted[$j] = $unsorted[$i];
                    $unsorted[$i] = $temp;
                }
            }
        }

        return $unsorted;
    }
}

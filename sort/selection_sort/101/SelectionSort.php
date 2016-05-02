<?php

class SelectionSort
{

    public function sort(array $unsorted)
    {
        for ($j = 0; $j < count($unsorted); $j++) {
            $jMin = $unsorted[$j];
            for ($i = $j + 1; $i < count($unsorted); $i++)  {
                if ($unsorted[$i] < $jMin) {
                    $temp = $unsorted[$j];
                    $unsorted[$j] = $unsorted[$i];
                    $unsorted[$i] = $temp;
                }
            }
        }
        return $unsorted;
    }
}

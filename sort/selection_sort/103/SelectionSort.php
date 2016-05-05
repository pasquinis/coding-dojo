<?php

class SelectionSort
{
    public function sort($unsorted)
    {
        for ($i = 1; $i < count($unsorted); $i++) {
            if ($unsorted[$i] < $unsorted[0]) {
                $temp = $unsorted[0];
                $unsorted[0] = $unsorted[$i];
                $unsorted[$i] = $temp;
            }
        }
        return $unsorted;
    }
}

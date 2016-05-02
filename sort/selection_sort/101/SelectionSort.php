<?php

class SelectionSort
{

    public function sort(array $unsorted)
    {
        $first = $unsorted[0];
        for ($i = 1; $i < count($unsorted); $i++)  {
            if ($unsorted[$i] < $first) {
                $temp = $first;
                $unsorted[0] = $unsorted[$i];
                $unsorted[$i] = $temp;
            }
        }
        return $unsorted;
    }
}

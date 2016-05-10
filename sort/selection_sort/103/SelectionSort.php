<?php

class SelectionSort
{
    public function __construct($display)
    {
        $this->display = $display;
    }

    public function sort($unsorted)
    {
        $this->display->add($unsorted);
        $this->display->output();
        $this->display->clear();
        for ($j = 0; $j < count($unsorted); $j++) {
            $iMin = $j;
            $this->display->min($iMin);
            $this->display->output();
            $this->display->clear();
            for ($i = $j + 1; $i < count($unsorted); $i++) {
                $this->display->select($i);
                $this->display->output();
                $this->display->clear();
                if ($unsorted[$i] < $unsorted[$iMin]) {
                    $iMin = $i;
                    $this->display->min($iMin);
                    $this->display->output();
                    $this->display->clear();
                }
            }

            $temp = $unsorted[$j];
            $unsorted[$j] = $unsorted[$iMin];
            $unsorted[$iMin] = $temp;
            $this->display->add($unsorted);
            $this->display->output();
            $this->display->clear();
        }
        return $unsorted;
    }
}

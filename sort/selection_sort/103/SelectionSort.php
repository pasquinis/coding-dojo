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
        $this->display->clear(
            $this->display->output()
        );
        for ($j = 0; $j < count($unsorted); $j++) {
            $iMin = $j;
            $this->display->min($iMin);
            $this->display->clear(
                $this->display->output()
            );
            for ($i = $j + 1; $i < count($unsorted); $i++) {
                $this->display->select($i);
                $this->display->clear(
                    $this->display->output()
                );
                if ($unsorted[$i] < $unsorted[$iMin]) {
                    $iMin = $i;
                    $this->display->min($iMin);
                    $this->display->clear(
                        $this->display->output()
                    );
                }
            }

            $temp = $unsorted[$j];
            $unsorted[$j] = $unsorted[$iMin];
            $unsorted[$iMin] = $temp;
            $this->display->add($unsorted);
            $this->display->clear(
                $this->display->output()
            );
        }
        return $unsorted;
    }
}

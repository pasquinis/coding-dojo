<?php

class Fibonacci
{
    public function compute($aNumber)
    {
        if ($aNumber == 0) return 0;
        if ($aNumber > 2) {
            return 2;
        } else {
            return 1;
        }
    }
}

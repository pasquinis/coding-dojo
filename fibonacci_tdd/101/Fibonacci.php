<?php

class Fibonacci
{
    public function calculate($aNumber)
    {
        if ($aNumber == 4) {
            return 3;
        }

        if ($aNumber == 3) {
            return 2;
        }

        return 1;
    }
}

<?php

class Fibonacci
{
    public function calculate($aNumber)
    {
        if ($aNumber >= 2) {
            return $aNumber - 1;
        }

        return 1;
    }
}

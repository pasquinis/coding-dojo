<?php

class Fibonacci
{
    public function compute($aNumber)
    {
        if ($aNumber == 0) return 0;
        if ($aNumber <= 2) return 1;
        return $this->compute($aNumber - 1) + $this->compute($aNumber - 2);
    }
}

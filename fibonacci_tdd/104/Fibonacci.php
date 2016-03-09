<?php

class Fibonacci
{
    public function calculate($aNumber)
    {
        if ($aNumber == 0) return 0;
        if ($aNumber == 1) return 1;
        return $this->calculate($aNumber - 2) + $this->calculate($aNumber - 1);
    }
}

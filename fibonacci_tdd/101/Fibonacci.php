<?php

class Fibonacci
{
    public function calculate($aNumber)
    {
        if ($aNumber == 0) return 0;
        if ($aNumber == 1) return 1;
        if ($aNumber >= 2) {
            $output = $this->calculate($aNumber - 1) + $this->calculate($aNumber - 2);
            return $output;
        }

        return 1;
    }
}

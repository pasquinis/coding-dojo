<?php

class LastFrame extends Frame
{
    public function terminated()
    {
        return (count($this->rollsHistory) > 2);
    }

    public function computeBonus()
    {
        $partialBonus = 0;
        for($i = 0; $i < 2;$i++) {
            $partialBonus += $this->rollsHistory[$i];
        }
        echo "LF partialBonus {$partialBonus}" . PHP_EOL;
        return $partialBonus;
    }
}

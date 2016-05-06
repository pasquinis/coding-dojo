<?php

class Display
{
    const EIGHT =<<<EIGHT
+-----+
|M _  |
| |_| |
| |_| |
+-----+
EIGHT;

    public function __construct()
    {
        $this->min = -1;
    }

    public function add($elements)
    {
        $this->elements = $elements;
    }

    public function min($index)
    {
        $this->min = $index;
    }

    public function output()
    {
        $output = '';
        for ($i = 0; $i < count($this->elements); $i++) {
            $element = '';
            if ($this->elements[$i] == 8) {
                $element= self::EIGHT;
            }

            if ($this->min == $i) {
                $element = str_replace('M', '*', $element);
            }

            $element = str_replace('M', ' ', $element);
            $output .= $element;

        }
        return $output;
    }
}

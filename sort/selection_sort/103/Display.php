<?php

class Display
{
    const EIGHT =<<<EIGHT
+-----+
|  _  |
| |_| |
| |_| |
+-----+
EIGHT;

    public function add($elements)
    {
        $this->elements = $elements;
    }

    public function output()
    {
        $output = '';
        foreach ($this->elements as $element) {
            if ($element == 8) {
                $output .= self::EIGHT;
            }
        }
        return $output;
    }
}

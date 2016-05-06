<?php

class Display
{
    const EIGHT =<<<EIGHT
+-----+
|M _ S|
| |_| |
| |_| |
+-----+
EIGHT;

    const MIN_PLACEHOLDER = 'M';
    const SELECT_PLACEHOLDER = 'S';

    public function __construct()
    {
        $this->min = -1;
        $this->select = -1;
    }

    public function add($elements)
    {
        $this->elements = $elements;
    }

    public function min($index)
    {
        $this->min = $index;
    }

    public function select($index)
    {
        $this->select = $index;
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
                $element = str_replace(self::MIN_PLACEHOLDER, '*', $element);
            }

            if ($this->select == $i) {
                $element = str_replace(self::SELECT_PLACEHOLDER, '?', $element);
            }

            $output .= $this->removePlaceholders($element);
        }
        return $output;
    }

    private function removePlaceholders($element)
    {
        $cleaned = str_replace(self::SELECT_PLACEHOLDER, ' ', $element);
        $cleaned = str_replace(self::MIN_PLACEHOLDER, ' ', $cleaned);
        return $cleaned;
    }
}

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
    const MIN_ACTUAL_VALUE = '*';
    const SELECT_PLACEHOLDER = 'S';
    const SELECT_ACTUAL_VALUE = '?';

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

            if ($this->thisKeyIsTheMin($i)) {
                $element = $this->substitutePlaceHolder(
                    self::MIN_PLACEHOLDER,
                    self::MIN_ACTUAL_VALUE,
                    $element
                );
            }

            if ($this->thisKeyIsSelected($i)) {
                $element = $this->substitutePlaceHolder(
                    self::SELECT_PLACEHOLDER,
                    self::SELECT_ACTUAL_VALUE,
                    $element
                );
            }

            $output .= $this->removePlaceholders($element);
        }
        return $output;
    }

    private function thisKeyIsTheMin($index)
    {
        return $this->min == $index;
    }

    private function thisKeyIsSelected($index)
    {
        return $this->select == $index;
    }

    private function substitutePlaceHolder($placeholder, $actualValue, $element)
    {
        return str_replace($placeholder, $actualValue, $element);
    }

    private function removePlaceholders($element)
    {
        $cleaned = str_replace(self::SELECT_PLACEHOLDER, ' ', $element);
        $cleaned = str_replace(self::MIN_PLACEHOLDER, ' ', $cleaned);
        return $cleaned;
    }
}

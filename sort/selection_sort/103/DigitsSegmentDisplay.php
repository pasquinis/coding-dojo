<?php

require_once 'Display.php';

class DigitsSegmentDisplay implements Display
{
    const ONE =<<<ONE
+-----+
|M   S|
|   | |
|   | |
+-----+
ONE;
    const TWO =<<<TWO
+-----+
|M _ S|
|  _| |
| |_  |
+-----+
TWO;
    const THREE =<<<THREE
+-----+
|M _ S|
|  _| |
|  _| |
+-----+
THREE;
    const FOUR =<<<FOUR
+-----+
|M   S|
| |_| |
|   | |
+-----+
FOUR;
    const FIVE =<<<FIVE
+-----+
|M _ S|
| |_  |
|  _| |
+-----+
FIVE;
    const SIX =<<<SIX
+-----+
|M _ S|
| |_  |
| |_| |
+-----+
SIX;
    const SEVEN =<<<SEVEN
+-----+
|M _ S|
|   | |
|   | |
+-----+
SEVEN;
    const EIGHT =<<<EIGHT
+-----+
|M _ S|
| |_| |
| |_| |
+-----+
EIGHT;
    const NINE =<<<NINE
+-----+
|M _ S|
| |_| |
|  _| |
+-----+
NINE;

    const MIN_PLACEHOLDER = 'M';
    const MIN_ACTUAL_VALUE = '*';
    const SELECT_PLACEHOLDER = 'S';
    const SELECT_ACTUAL_VALUE = '?';

    public function __construct()
    {
        $this->min = -1;
        $this->select = -1;
        $this->digitsConverter = [
            1 => self::ONE,
            2 => self::TWO,
            3 => self::THREE,
            4 => self::FOUR,
            5 => self::FIVE,
            6 => self::SIX,
            7 => self::SEVEN,
            8 => self::EIGHT,
            9 => self::NINE
        ];
    }

    public function add(array $elements)
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
            foreach($this->digitsConverter as $key => $digit) {
                if ($this->elements[$i] == $key) {
                   $element = $digit;
               }
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

    public function clear($output)
    {
        echo $output;
        usleep(500000);
        system('clear');
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
        return PHP_EOL . $cleaned;
    }
}

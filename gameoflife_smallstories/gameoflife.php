<?php

$size = (int) $argv[1];

echo "X" . str_repeat("O", $size-1) . PHP_EOL;
for($rows = 1; $rows < $size; $rows++) {
    $toPrint = new Row($size);
    echo $toPrint . PHP_EOL;
}

class Row
{
    private $size;

    public function __construct($size) {
        $this->size = $size;
    }

    public function __toString()
    {
        return str_repeat("O", $this->size);
    }
}

class Cell
{
    private $state;

    public function __construct()
    {
    }

    public function __toString()
    {
        echo "O";
    }
}

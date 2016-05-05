<?php

require 'SelectionSort.php';

class SelectionSortTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldOrderAnArrayOfOneElement()
    {
        $selection = new SelectionSort();
        $this->assertEquals([1], $selection->sort([1]));
    }
}

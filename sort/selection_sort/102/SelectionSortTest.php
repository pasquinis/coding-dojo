<?php

require_once 'SelectionSort.php';

class SelectionSortTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldIOrderAnArrayOfOneElement()
    {
        $selection = new SelectionSort();
        $this->assertEquals([1], $selection->sort([1]));
    }
}

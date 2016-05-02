<?php

require_once 'SelectionSort.php';

class SelectionSortTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->selection = new SelectionSort();
    }

    public function testShouldSortAnUnsortedArrayOfOneElement()
    {
        $this->assertEquals([1], $this->selection->sort([1]));
    }

    public function testShouldSortAnUnsortedArrayOfTwoElements()
    {
        $unsortedArray = [2, 1];
        $expectedArray = [1, 2];

        $this->assertEquals($expectedArray, $this->selection->sort($unsortedArray));
    }
}

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

    public function testShouldSortAnUnsortedArrayTenElements()
    {
        $unsortedArray = [2, 1];
        $expectedArray = [1, 2];

        $this->assertEquals($expectedArray, $this->selection->sort($unsortedArray));
    }

    public function testShouldSortAnUnsortedArrayOfTwoElements()
    {
        $unsortedArray = [2, 1, 3, 7, 9, 10, 8, 6, 5, 4];
        $expectedArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        $this->assertEquals($expectedArray, $this->selection->sort($unsortedArray));
    }
}

<?php

require_once 'SelectionSort.php';

class SelectionSortTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->selection = new SelectionSort();
    }

    public function testShouldIOrderAnArrayOfOneElement()
    {
        $this->assertEquals([1], $this->selection->sort([1]));
    }

    public function testShouldIOrderAnArrayOfUnsortedElements()
    {
        $this->assertEquals([1, 2], $this->selection->sort([2, 1]));
        $this->assertEquals([1, 2, 3], $this->selection->sort([2, 3, 1]));
        $this->assertEquals(
            [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            $this->selection->sort([2, 3, 6, 5, 8, 7, 10, 9, 4, 1])
        );
    }
}

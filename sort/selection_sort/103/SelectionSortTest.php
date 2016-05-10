<?php

require 'SelectionSort.php';
require 'FakeDisplay.php';

class SelectionSortTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->display = new FakeDisplay();
        $this->selection = new SelectionSort();
    }

    public function testShouldOrderAnArrayOfOneElement()
    {
        $this->assertEquals([1], $this->selection->sort([1]));
    }

    public function testShouldSortAnArrayUnorderedWithMoreElements()
    {
        $this->assertEquals([1, 2], $this->selection->sort([2, 1]));
        $this->assertEquals([1, 2, 3], $this->selection->sort([2, 3, 1]));
        $this->assertEquals(
            [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            $this->selection->sort([2, 3, 6, 5, 8, 7, 10, 9, 4, 1])
        );
    }

}

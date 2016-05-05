<?php

require 'SelectionSort.php';

class SelectionSortTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
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
    }

}

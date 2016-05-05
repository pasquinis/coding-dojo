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

    public function testShouldSortAnArrayUnorderedWithTwoElements()
    {
        $this->assertEquals([1, 2], $this->selection->sort([2, 1]));
    }
}

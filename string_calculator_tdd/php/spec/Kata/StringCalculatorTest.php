<?php

namespace Kata;

class StringCalculatorTest extends \PHPUnit_Framework_TestCase {

    public function testAddingZeroResponseisEmpty()
    {
        $obj = new StringCalculator();
        $response = $obj->add("");
        $this->assertEquals("", $response);
    }

    public function testAddingOneResponseIsCorrect()
    {
        $obj = new StringCalculator();
        $response = $obj->add("1");
        $this->assertEquals(1, $response);
    }

    public function testAddingTwoNumbersResponseIsCorrect()
    {
        $obj = new StringCalculator();
        $response = $obj->add("1,2");
        $this->assertEquals(3, $response);
    }

    public function testAddingAnUnknownAmountOfNumbers()
    {
        $obj = new StringCalculator();
        $response = $obj->add("1,2,3,4,5,6,7,8,9,10");
        $this->assertEquals(55, $response);
    }
}

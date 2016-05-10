<?php

require_once 'DigitsSegmentDisplay.php';

class DisplayTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->display = new DigitsSegmentDisplay();
    }

    public function testShouldDisplayAnArrayOfOneElement()
    {
        $expected = <<<EIGHT

+-----+
|  _  |
| |_| |
| |_| |
+-----+
EIGHT;

        $this->display->add([8]);

        $this->assertEquals($expected, $this->display->output());
    }

    public function testShouldDisplayAnArrayWithMinElement()
    {
        $expected = <<<EIGHT

+-----+
|* _  |
| |_| |
| |_| |
+-----+
EIGHT;

        $this->display->add([8]);
        $this->display->min($i = 0);

        $this->assertEquals($expected, $this->display->output());
    }

    public function testShouldDisplayAnArrayWithSelectedElement()
    {
        $expected = <<<EIGHT

+-----+
|  _ ?|
| |_| |
| |_| |
+-----+
EIGHT;

        $this->display->add([8]);
        $this->display->select($i = 0);

        $this->assertEquals($expected, $this->display->output());
    }

    public function testShouldDisplayAnArrayWithMinAndSelectedElement()
    {
        $expected = <<<EIGHT

+-----+
|* _ ?|
| |_| |
| |_| |
+-----+
EIGHT;

        $this->display->add([8]);
        $this->display->min($i = 0);
        $this->display->select($i = 0);

        $this->assertEquals($expected, $this->display->output());
    }

    public function testShouldDisplayAnArrayWithAMinAndSelectedElements()
    {
        $expected = <<<EIGHT

+-----+
|*    |
|   | |
|   | |
+-----+
+-----+
|  _ ?|
|  _| |
| |_  |
+-----+
+-----+
|  _  |
|  _| |
|  _| |
+-----+
+-----+
|     |
| |_| |
|   | |
+-----+
EIGHT;

        $this->display->add([1, 2, 3, 4]);
        $this->display->min($i = 0);
        $this->display->select($i = 1);

        $this->assertEquals($expected, $this->display->output());
    }
}

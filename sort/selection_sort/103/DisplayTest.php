<?php

require_once 'Display.php';

class DisplayTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldDisplayAnArrayOfOneElement()
    {
        $display = new Display();
        $expected = <<<EIGHT

+-----+
|  _  |
| |_| |
| |_| |
+-----+
EIGHT;

        $display->add([8]);

        $this->assertEquals($expected, $display->output());
    }

    public function testShouldDisplayAnArrayWithMinElement()
    {
        $display = new Display();
        $expected = <<<EIGHT

+-----+
|* _  |
| |_| |
| |_| |
+-----+
EIGHT;

        $display->add([8]);
        $display->min($i = 0);

        $this->assertEquals($expected, $display->output());
    }

    public function testShouldDisplayAnArrayWithSelectedElement()
    {
        $display = new Display();
        $expected = <<<EIGHT

+-----+
|  _ ?|
| |_| |
| |_| |
+-----+
EIGHT;

        $display->add([8]);
        $display->select($i = 0);

        $this->assertEquals($expected, $display->output());
    }

    public function testShouldDisplayAnArrayWithMinAndSelectedElement()
    {
        $display = new Display();
        $expected = <<<EIGHT

+-----+
|* _ ?|
| |_| |
| |_| |
+-----+
EIGHT;

        $display->add([8]);
        $display->min($i = 0);
        $display->select($i = 0);

        $this->assertEquals($expected, $display->output());
    }

    public function testShouldDisplayAnArrayWithAMinAndSelectedElements()
    {
        $display = new Display();
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

        $display->add([1, 2, 3, 4]);
        $display->min($i = 0);
        $display->select($i = 1);

        $this->assertEquals($expected, $display->output());
    }
}

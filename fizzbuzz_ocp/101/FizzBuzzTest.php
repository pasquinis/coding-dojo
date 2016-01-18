<?php

require_once('FizzBuzzFactory.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function testICanSayOneIfOne()
    {
        $obj = FizzBuzzFactory::create();
        $this->assertEquals('1', $obj->say('1'));
    }
}

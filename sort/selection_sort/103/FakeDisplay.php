<?php

require 'Display.php';

class FakeDisplay implements Display
{
    public function add(array $arrayOfElements) {}
    public function min($index) {}
    public function select($index) {}
    public function output() {}
    public function clear() {}
}

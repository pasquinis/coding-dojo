<?php

require_once('FizzBuzz.php');
require_once('Number.php');

class FizzBuzzFactory
{
    public static function create()
    {
        return new FizzBuzz([ new Number()]);
    }

}

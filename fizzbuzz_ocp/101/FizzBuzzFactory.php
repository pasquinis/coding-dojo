<?php

require_once('FizzBuzz.php');

class FizzBuzzFactory
{
    public static function create()
    {
        return new FizzBuzz();
    }

}

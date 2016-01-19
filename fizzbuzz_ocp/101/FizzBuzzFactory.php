<?php

require_once('FizzBuzz.php');
require_once('Number.php');
require_once('Fizz.php');
require_once('Buzz.php');

class FizzBuzzFactory
{
    public static function create()
    {
        return new FizzBuzz([ 
            new Buzz(),
            new Fizz(),
            new Number(),
        ]);
    }

}

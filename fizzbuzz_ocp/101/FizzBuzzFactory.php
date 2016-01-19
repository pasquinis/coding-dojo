<?php

require_once('FizzBuzz.php');
require_once('NumberRule.php');
require_once('FizzRule.php');
require_once('BuzzRule.php');
require_once('FizzBuzzRule.php');
require_once('BangRule.php');
require_once('FizzBangRule.php');

class FizzBuzzFactory
{
    public static function create()
    {
        return new FizzBuzz([ 
            new FizzBangRule(),
            new BangRule(),
            new FizzBuzzRule(),
            new BuzzRule(),
            new FizzRule(),
            new NumberRule(),
        ]);
    }

}

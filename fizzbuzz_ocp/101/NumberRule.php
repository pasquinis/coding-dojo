<?php

require_once('Rule.php');

class NumberRule implements Rule
{
    public function canApply($number)
    {
        return true;
    }

    public function say($number)
    {
        return $number;
    }
}

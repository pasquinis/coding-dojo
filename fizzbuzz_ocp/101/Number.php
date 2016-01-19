<?php
require_once('Rules.php');

class Number implements Rules
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

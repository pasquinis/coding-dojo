<?php

require_once('Number.php');

class FizzBuzz
{

    public function __construct($rules)
    {
        $this->rules = $rules;
    }

    public function say($number)
    {
        foreach($this->rules as $rule) {
            if ($rule->canApply($number)) {
                return $rule->say($number);
            }
        }
    }
}

<?php

class FizzBuzz
{

    public function __construct($rules)
    {
        $this->rules = $rules;
    }

    public function say($number)
    {
        foreach($this->rules as $rule) {
            if ($rule->canApplyIt($number)) {
                return $rule->say($number);
            }
        }
    }
}

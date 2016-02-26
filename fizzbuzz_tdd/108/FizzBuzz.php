<?php

class FizzBuzz
{

    public function __construct($rules)
    {
        $this->rules = $rules;
    }

    public function say($aNumber)
    {
        $message = '';
        foreach($this->rules as $multiplier => $word) {
          if ($aNumber % $multiplier == 0) {
              $message .= $word;
          }
        }

        return ($message != '') ? $message : $aNumber;
    }
}

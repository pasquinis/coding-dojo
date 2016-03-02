<?php

class FizzBuzz
{
    public function __construct()
    {
        $this->rules = [
            3 => 'Fizz',
            5 => 'Buzz'
        ];
    }

    public function say($aNumber)
    {
        $word = '';
        foreach($this->rules as $multiplier => $response) {
            $word .= $this->responseForMultipleOf(
                $aNumber,
                $multiplier,
                $response
            );
        }

        return ($word != '') ? $word : $aNumber;
    }

    private function responseForMultipleOf($aNumber, $multiplier, $word)
    {
        $response = '';
        if ($aNumber % $multiplier == 0) {
            $response .= $word;
        }

        return $response;
    }
}

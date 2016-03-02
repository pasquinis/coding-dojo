<?php

class FizzBuzz
{
    public function say($aNumber)
    {
        $word = $this->responseForMultipleOfThree($aNumber);

        if ($aNumber % 5 == 0) {
            $word .= 'Buzz';
        }

        return ($word != '') ? $word : $aNumber;
    }

    private function responseForMultipleOfThree($aNumber)
    {
        $word = '';
        if ($aNumber % 3 == 0) {
            $word .= 'Fizz';
        }
        return $word;
    }
}

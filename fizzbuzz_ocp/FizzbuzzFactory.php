<?php

include(__DIR__ . '/Fizzbuzz.php');

class FizzbuzzFactory
{
    public static function create()
    {
        $interpreters = array(
            //new AnswerInterpreter(),
            new ParametricInterpreter('Fizz', 3),
            new ParametricInterpreter('Buzz', 5),
            new ParametricInterpreter('Bang', 7),
            new NumericInterpreter(),
        );

        return new Fizzbuzz($interpreters);
    }
}

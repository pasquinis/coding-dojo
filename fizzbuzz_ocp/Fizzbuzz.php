<?php

class Fizzbuzz
{
    public function __construct($interpreters)
    {
        $this->interpreters = $interpreters;
    }

    public function say($value)
    {
        $response = '';
        foreach($this->interpreters as $interpreter) {
            $response .= $interpreter->interpret($value, $response);
        }

        return $response;
    }
}

interface Interpreter
{
    public function interpret($value, $current);
}

class NumericInterpreter implements Interpreter
{
    public function interpret($value, $current)
    {
        if (!$current) {
            return $value;
        }
    }
}

class ParametricInterpreter implements Interpreter
{
    public function __construct($label, $divisor)
    {
        $this->label = $label;
        $this->divisor = $divisor;
    }

    public function interpret($value, $current)
    {
        return ($value % $this->divisor == 0) ? $this->label : '';
    }
}

class AnswerInterpreter implements Interpreter
{

    public function interpret($value, $current)
    {
        return ('Answer');
    }

}



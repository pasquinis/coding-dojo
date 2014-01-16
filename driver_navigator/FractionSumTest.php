<?php

class FractionSumTest extends \PHPUnit_Framework_TestCase
{

    public function testWhenTheDenominatorIsOneThenTheResultIsTheSumOfNumerator()
    {
        $first = new Fraction(2,1);
        $second = new Fraction(3,1);

        $calculator = new Calculator();
        $expected = new Fraction(5,1);
        
        $this->assertEquals($expected, $calculator->sum($first, $second));
    }

    public function testSumOfTwoFraction()
    {
        $first = new Fraction(2,3);
        $second = new Fraction(5,2);

        $calculator = new Calculator();
        $expected = new Fraction(19,6);
        
        $this->assertEquals($expected, $calculator->sum($first, $second));
    }
}


class Fraction
{
    private $numerator;
    private $denominator;
    public function __construct($numerator, $denominator)
    {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function numerator()
    {
        return $this->numerator;
    }

    public function denominator()
    {
        return $this->denominator;
    }
}

class Calculator
{
    public function sum(/* Fractions */)
    {
        $multiplDenom = $first->denominator() * $second->denominator();
        $firstNumerator = ($multiplDenom / $first->denominator()) * $first->numerator();
        $secondNumerator = ($multiplDenom / $second->denominator()) * $second->numerator();

        return new Fraction($firstNumerator + $secondNumerator,$multiplDenom);
    }
}

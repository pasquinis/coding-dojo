<?php

namespace Kata;

class PrimeFactorsTest extends \PHPUnit_Framework_TestCase {

    public function setUp() {
        $this->obj = new PrimeFactors();
    }

    public function testPrimesforOneIsEmpty() {
        $expected = [];
        $this->assertEquals($expected, $this->obj->primes(1));
    }

    public function testPrimesForTwoisTwo() {
        $expected = [2];
        $this->assertEquals($expected, $this->obj->primes(2));
    }

    public function testPrimesForThreeisThree() {
        $expected = [3];
        $this->assertEquals($expected, $this->obj->primes(3));
    }

    public function testPrimesForFourIsDecomposed() {
        $expected = [2, 2];
        $this->assertEquals($expected, $this->obj->primes(4));
    }

    public function testPrimesForFiveIsFive() {
        $expected = [5];
        $this->assertEquals($expected, $this->obj->primes(5));
    }

    public function testPrimesForSixIsDecomposed() {
        $expected = [2,3];
        $this->assertEquals($expected, $this->obj->primes(6));
    }

    public function testPrimesForSevenIsSeven() {
        $expected = [7];
        $this->assertEquals($expected, $this->obj->primes(7));
    }

    public function testPrimesForEightIsDecomposed() {
        $expected = [2,2,2];
        $this->assertEquals($expected, $this->obj->primes(8));
    }

    public function testPrimesForNineIsDecomposed() {
        $expected = [3,3];
        $this->assertEquals($expected, $this->obj->primes(9));
    }

    public function testPrimesForTenIsDecomposed() {
        $expected = [2,5];
        $this->assertEquals($expected, $this->obj->primes(10));
    }
}

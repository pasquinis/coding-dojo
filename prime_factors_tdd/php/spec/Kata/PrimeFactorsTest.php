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

}

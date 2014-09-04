<?php

namespace Kata;

class PrimeFactorsTest extends \PHPUnit_Framework_TestCase {

    public function testPrimesforOneIsEmpty() {
        $obj = new PrimeFactors();
        $expected = [];
        $this->assertEquals($expected, $obj->primes(1));
    }

}

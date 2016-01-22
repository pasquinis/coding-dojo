<?php

require_once('Character.php');
require_once('SwordWeapon.php');

class BattleTest extends PHPUnit_Framework_TestCase
{
    public function testCanIUseSword()
    {
        $character = new Character();
        $character->setWeapon(new SwordWeapon());
        $this->assertEquals('sword attack', $character->attack());
    }
}

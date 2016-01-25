<?php

require_once('Character.php');
require_once('SwordStrategy.php');

class CharacterTest extends PHPUnit_Framework_TestCase
{
    public function testACharacterCanAttackWithSword()
    {
        $character = new Character();
        $character->setWeaponStrategy(new SwordStrategy());
        $this->assertEquals('sword attack', $character->attack());
    }
}

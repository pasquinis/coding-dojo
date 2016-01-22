<?php

require_once('Weapon.php');

class Character
{
    private $weapon;

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon= $weapon;
    }

    public function attack()
    {
        return $this->weapon->useIt();
    }
}

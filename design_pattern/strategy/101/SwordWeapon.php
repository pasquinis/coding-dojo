<?php

require_once('Weapon.php');

class SwordWeapon implements Weapon
{
    public function useIt()
    {
        return "sword attack";
    }
}

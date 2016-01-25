<?php
require_once('WeaponStrategy.php');

class SwordStrategy implements WeaponStrategy
{

    public function useIt()
    {
        return "sword attack";
    }
}

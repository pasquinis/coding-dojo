<?php

require_once('SwordWeapon.php');

class Battle
{
    public function useWeapon($type)
    {
        $weapon = null;
        switch($type) {
            case 1:
                $weapon = new SwordWeapon();
        }

        return $weapon->attack();
    }
}

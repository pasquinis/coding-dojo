<?php

class Character
{
    private $strategy;

    public function setWeaponStrategy($strategy)
    {
        $this->strategy = $strategy;
    }

    public function attack()
    {
        return $this->strategy->useIt();
    }
}

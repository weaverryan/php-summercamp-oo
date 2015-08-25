<?php

namespace AppBundle\Model;

class JediShip extends AbstractShip
{
    public function doesShipUseEvasiveManeuvering()
    {
        return rand(0, 10) > 5;
    }

    public function getType()
    {
        return 'jedi';
    }

    public function getName()
    {
        return 'Our cool Jedi ship';
    }

    public function getDefense()
    {
        return 100;
    }

    protected function getWeaponPower()
    {
        return 10;
    }

    protected function doesShipUseDevastatingAttack()
    {
        return rand(0, 10) > 5;
    }
}

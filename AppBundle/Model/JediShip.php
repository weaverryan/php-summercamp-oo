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

    public function getSingleAttackEffectiveness()
    {
        $weaponPower = 10;

        // devastating attack?
        if (rand(0, 10) == 10) {
            return 5 * $weaponPower;
        }

        return $weaponPower;
    }
}

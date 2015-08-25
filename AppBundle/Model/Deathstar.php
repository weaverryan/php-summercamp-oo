<?php

namespace AppBundle\Model;

class Deathstar extends AbstractShip
{
    public function doesShipUseEvasiveManeuvering()
    {
        return true;
    }

    public function getType()
    {
        return 'deathstar';
    }

    public function getName()
    {
        return 'The Deathstar';
    }

    public function getDefense()
    {
        return 10000000;
    }

    protected function getWeaponPower()
    {
        return 1000000;
    }

    protected function doesShipUseDevastatingAttack()
    {
        return true;
    }
}

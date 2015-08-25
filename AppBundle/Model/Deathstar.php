<?php

namespace AppBundle\Model;

class Deathstar implements ShipInterface
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

    public function getSingleAttackEffectiveness()
    {
        return 1000000;
    }
}

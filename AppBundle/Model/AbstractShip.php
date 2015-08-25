<?php

namespace AppBundle\Model;

abstract class AbstractShip
{
    abstract public function getName();

    abstract public function getType();

    abstract public function getDefense();

    abstract public function getSingleAttackEffectiveness();

    abstract public function doesShipUseEvasiveManeuvering();
}

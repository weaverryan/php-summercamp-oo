<?php

namespace AppBundle\Model;

abstract class AbstractShip
{
    abstract public function getName();

    abstract public function getType();

    abstract public function getDefense();

    abstract protected function getWeaponPower();

    abstract protected function doesShipUseDevastatingAttack();

    abstract public function doesShipUseEvasiveManeuvering();

    public function getSingleAttackEffectiveness()
    {
        // devastating attack?
        if ($this->doesShipUseDevastatingAttack()) {
            return 5 * $this->getWeaponPower();
        }

        return $this->getWeaponPower();
    }
}

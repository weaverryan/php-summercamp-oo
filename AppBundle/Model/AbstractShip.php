<?php

namespace AppBundle\Model;

abstract class AbstractShip implements ShipInterface
{
    abstract protected function getWeaponPower();

    abstract protected function doesShipUseDevastatingAttack();

    public function getSingleAttackEffectiveness()
    {
        // devastating attack?
        if ($this->doesShipUseDevastatingAttack()) {
            return 5 * $this->getWeaponPower();
        }

        return $this->getWeaponPower();
    }
}

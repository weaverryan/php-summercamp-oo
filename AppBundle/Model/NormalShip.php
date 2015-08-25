<?php

namespace AppBundle\Model;

class NormalShip extends AbstractShip
{
    private $name;

    private $weaponPower = 0;

    private $defense = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function setDefense($number)
    {
        if (!is_numeric($number)) {
            throw new \Exception('Defense must be a number, duh!');
        }

        $this->defense = $number;
    }

    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    public function doesShipUseEvasiveManeuvering()
    {
        return rand(0, 10) > 8;
    }

    public function getType()
    {
        return 'normal';
    }

    protected function doesShipUseDevastatingAttack()
    {
        return rand(0, 10) == 10;
    }

    protected function getWeaponPower()
    {
        return $this->weaponPower;
    }
}

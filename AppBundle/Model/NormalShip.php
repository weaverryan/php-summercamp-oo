<?php

namespace AppBundle\Model;

class NormalShip
{
    private $id;

    private $name;

    private $weaponPower = 0;

    private $defense = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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

    public function getSingleAttackEffectiveness()
    {
        // devastating attack?
        if (rand(0, 10) == 10) {
            return 5 * $this->getWeaponPower();
        }

        return $this->getWeaponPower();
    }
}

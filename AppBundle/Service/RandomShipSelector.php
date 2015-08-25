<?php

namespace AppBundle\Service;

use AppBundle\Model\NormalShip;

class RandomShipSelector
{
    /**
     * @var ShipLoader
     */
    private $shipLoader;

    public function __construct(ShipLoader $shipLoader)
    {
        $this->shipLoader = $shipLoader;
    }

    /**
     * Returns 2 random ships for battle
     *
     * @return NormalShip[]
     */
    public function getRandomShips()
    {
        $ships = $this->shipLoader->getShips();

        $key = array_rand($ships);
        $shipA = $ships[$key];
        unset($ships[$key]);

        $key = array_rand($ships);
        $shipB = $ships[$key];

        return array($shipA, $shipB);
    }
}
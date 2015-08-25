<?php

namespace AppBundle\Service;

use AppBundle\Model\AbstractShip;
use AppBundle\Model\Deathstar;
use AppBundle\Model\JediShip;
use AppBundle\Model\NormalShip;

class ShipLoader
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @return AbstractShip[]
     */
    public function getShips()
    {
        $ships = array();

        $shipsData = $this->queryForShips();

        foreach ($shipsData as $shipData) {
            $ships[] = $this->createShipFromData($shipData);
        }

        $jediShip = new JediShip();
        $ships[] = $jediShip;
        $ships[] = new Deathstar();

        return $ships;
    }

    /**
     * @return AbstractShip
     */
    public function getRandomShip()
    {
        // inefficient, but works well with what we're teaching
        $ships = $this->getShips();
        $key = array_rand($ships);

        return $ships[$key];
    }

    private function createShipFromData(array $shipData)
    {
        $name = $shipData['name'];
        $ship = new NormalShip($name);
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setDefense($shipData['defense']);

        return $ship;
    }

    /**
     * @return \PDO
     */
    private function getPDO()
    {
        return $this->pdo;
    }

    private function queryForShips()
    {
        $statement = $this->getPDO()->prepare('SELECT * FROM ship');
        $statement->execute();
        $shipsArray = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $shipsArray;
    }
}

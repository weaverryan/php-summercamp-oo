<?php

namespace AppBundle\Service;

use AppBundle\Model\Ship;

class ShipLoader
{
    private $pdo;

    /**
     * @return Ship[]
     */
    public function getShips()
    {
        $ships = array();

        $shipsData = $this->queryForShips();

        foreach ($shipsData as $shipData) {
            $ships[] = $this->createShipFromData($shipData);
        }

        return $ships;
    }

    /**
     * @return Ship
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
        $ship = new Ship($shipData['name']);
        $ship->setId($shipData['id']);
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setDefense($shipData['defense']);

        return $ship;
    }

    /**
     * @return \PDO
     */
    private function getPDO()
    {
        if ($this->pdo === null) {
            $this->pdo = new \PDO(
                'mysql:host=localhost;dbname=ezsummer_oo',
                'root',
                ''
            );

            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }

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


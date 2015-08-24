<?php

namespace AppBundle\Service;

use AppBundle\Model\NormalShip;

class ShipLoader
{
    private $pdo;

    /**
     * @return NormalShip[]
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
     * @return NormalShip
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
        if ($this->pdo === null) {
            $pdo = new \PDO(
                'mysql:host=localhost;dbname=oop',
                'summer',
                'camp'
            );

            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $this->pdo = $pdo;
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


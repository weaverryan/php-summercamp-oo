<?php

namespace AppBundle\Model;

class JediShip extends NormalShip
{
    public function doesShipUseEvasiveManeuvering()
    {
        return rand(0, 10) > 5;
    }

    public function getType()
    {
        return 'jedi';
    }
}

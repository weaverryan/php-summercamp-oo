<?php

namespace AppBundle\Service;

use Doctrine\Common\Cache\Cache;

class CacheableShipLoader
{
    /**
     * @var ShipLoader
     */
    private $shipLoader;

    /**
     * @var Cache
     */
    private $cache;

    public function __construct(ShipLoader $shipLoader, Cache $cache)
    {
        $this->shipLoader = $shipLoader;
        $this->cache = $cache;
    }

    public function getShips()
    {
        // todo - write code that caches the ships
    }
}

<?php

namespace AppBundle\Service;

use Doctrine\Common\Cache\Cache;

class CacheableShipLoader implements ShipLoaderInterface
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
        $key = 'all_ships';

        if ($this->cache->contains($key)) {
            return $this->cache->fetch($key);
        }

        $ships = $this->shipLoader->getShips();
        $this->cache->save($key, $ships);

        return $ships;
    }
}

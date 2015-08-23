<?php

namespace AppBundle\Controller;

use AppBundle\Service\BattleManager;
use AppBundle\Service\ShipLoader;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ShipController extends ContainerAware
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        $shipLoader = new ShipLoader();
        $ships = $shipLoader->getShips();

        $html = $this->container->get('twig')->render(
            'ship/homepage.twig',
            array('ships' => $ships)
        );

        return new Response($html);
    }

    /**
     * @Route("/battle", name="wage_battle")
     */
    public function battleAction()
    {
        $shipLoader = new ShipLoader();
        $shipA = $shipLoader->getRandomShip();
        $shipB = $shipLoader->getRandomShip();

        $battleManager = new BattleManager();
        $winningShip = $battleManager->battle($shipA, $shipB);

        $html = $this->container->get('twig')->render(
            'ship/battle.twig',
            array('shipA' => $shipA, 'shipB' => $shipB, 'winningShip' => $winningShip)
        );

        return new Response($html);
    }
}

<?php

namespace AppBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends ContainerAware
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        $html = $this->container->get('twig')->render(
            'default/homepage.twig',
            array('random' => rand(1, 100))
        );

        return new Response($html);
    }
}

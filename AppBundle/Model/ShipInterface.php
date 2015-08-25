<?php
/**
 * Created by PhpStorm.
 * User: weaverryan
 * Date: 8/23/15
 * Time: 6:05 PM
 */
namespace AppBundle\Model;

interface ShipInterface
{
    public function getName();

    public function getType();

    public function getDefense();

    public function doesShipUseEvasiveManeuvering();

    public function getSingleAttackEffectiveness();
}

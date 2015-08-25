<?php

namespace AppBundle\Service;

use AppBundle\Model\AbstractShip;

class BattleManager
{
    /**
     * Our complex fighting algorithm!
     *
     * @param AbstractShip $ship1
     * @param AbstractShip $ship2
     * @return AbstractShip|null if the ships destroyed each other
     */
    public function battle(AbstractShip $ship1, AbstractShip $ship2)
    {
        $ship1Health = $ship1->getDefense();
        $ship2Health = $ship2->getDefense();

        while ($ship1Health > 0 && $ship2Health > 0) {
            // ship1 attacks ship2
            if (!$ship2->doesShipUseEvasiveManeuvering()) {
                // they didn't dodge, so remove energy
                $ship2Health -= $ship1->getSingleAttackEffectiveness();
            }

            // ship2 attacks ship1
            if (!$ship1->doesShipUseEvasiveManeuvering()) {
                // they didn't dodge, so remove energy
                $ship1Health -= $ship2->getSingleAttackEffectiveness();
            }
        }

        if ($ship1Health <= 0 && $ship2Health <= 0) {
            return null;
        }

        if ($ship1Health <= 0) {
            return $ship2;
        }

        return $ship1;
    }
}

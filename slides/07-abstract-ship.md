#### Step 7 - AbstractShip
Stuck? No worries: http://bit.ly/summer-oo

## PROBLEM

What's the issue with JediShip extending normal Ship? What are the
minimum things that a Ship actually needs?

## STEPS

A) Create a new AbstractShip abstract class, with these methods:
- getName()
- getType()
- getDefense()
- getSingleAttackEffectiveness()
- doesShipUseEvasiveManeuvering()

B) Make both classes extend AbstractShip. For JediShip,
return the hardcoded values from `getName()` and `getDefense()`

C) Update ShipLoader and BattleManager so things keep working

**GOAL**
Everything should still work!

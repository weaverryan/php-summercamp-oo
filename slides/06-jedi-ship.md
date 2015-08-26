#### Step 6 - Create JediShip
Stuck? No worries: http://bit.ly/summer-oo

## PROBLEM

Not all ships are equal: Jedi's are special... Let's
add a new ship, that isn't loaded from the database.

## STEPS

A) Create a new JediShip class (extend NormalShip)

B) Override `getType()` to return `jedi`

C) Override `doesShipUseEvasiveManeuvering` so that
this happens 50% of the time

D) Update `ShipLoader` to add one of these with
    hardcoded weaponPower (10) and defense (100)

**GOAL**
Everything should still work, but there should be 5 ships

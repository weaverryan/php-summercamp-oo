#### Step 12 - ShipLoaderInterface!
Stuck? No worries: http://bit.ly/summer-oo

## PROBLEM

RandomShipSelector expects a `ShipLoader`, but we're passing
it a `CacheableShipLoader`.

## STEPS

A) Create a `ShipLoaderInterface`

B) Make both classes implement this

C) Update the type-hint on `RandomShipSelector`

**GOAL**
Everything should work again!

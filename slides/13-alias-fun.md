#### Step 13 - Fun with Alises!
Stuck? No worries: http://bit.ly/summer-oo

## PROBLEM

The homepage isn't using the CacheableShipLoader. Why not? What's
the best way to fix this? What if we want to quickly change between
using the cacheable versus non-cacheable ship loader?

Goal: make `ship_loader` just an "alias" for whichever *real*
"ship loader" we want.

## STEPS

Suppose your `ShipLoader` service is called `ship_loader`.

A) Change the name of your `ShipLoader` service to something
else - like `real_ship_loader`

B) Add a new service called `ship_loader` that is just
an alias to `cacheable_ship_loader`

C) Update `cacheable_ship_loader` to receive `real_ship_loader`

**GOAL**
Everything should work again! And you can just change the
alias value to toggle between a cached versus non-cached ship loader.

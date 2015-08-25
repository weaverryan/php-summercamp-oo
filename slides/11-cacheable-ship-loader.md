#### Step 11 - CacheableShipLoader!
Stuck? No worries: http://bit.ly/summer-oo

## PROBLEM

Suppose we want to cache the ship loading for performance! What
are some ways we could accomplish this?

## STEPS

A) Copy `installation/files/CacheableShipLoader.php` to
    `AppBundle/Service/CacheableShipLoader.php`

B) Update the `getShips()` code to use the cache

C) Register the "cacheable ship loader" as a service

D) Update the `random_ship_selector` service so that it's
    passed the CacheableShipLoader
w
**GOAL**
You should get a huge error about a bad object being
passed to `RandomShipSelector`. What's the problem?

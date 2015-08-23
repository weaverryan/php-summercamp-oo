#### Step 2: Random Number! (in YAML)
Stuck? No worries: http://bit.ly/summer-oo

A) Create a Route and Controller that
generates a random number

Follow along with *Step 1* and *Step 2* on the
    "Creating Pages" chapter of Symfony's book:
        http://bit.ly/1pYTnvD

**GOAL**

Go to `http://sfbasics.ezsc/app_dev.php/random/5` and
see a random number.

**EXTRA CREDIT**

* Add a `requirement` to the `limit` so that if you go to
`/app_dev.php/random/foo`, it won't match the route.

* Add another wildcard to the route - like `/random/{limit}/{name}`
and also print out this name on the page.

#### Step 3 - Register the PDO service
Stuck? No worries: http://bit.ly/summer-oo

## PROBLEM

What's wrong with instantiating PDO inside of the Controller?

## STEPS

A) Register the PDO object as a service in `config/config.yml`

B) Use this service in `ShipController` instead of instantiating
the `PDO` object directly there.

**GOAL**
Everything should still work!

**EXTRA CREDIT**

Find the cached container file (in `cache/`) and the specific method
that creates your `PDO` service.

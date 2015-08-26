#### Step 2: Extracting PDO
Stuck? No worries: http://bit.ly/summer-oo

## PROBLEM

What's wrong with instantiating PDO inside of `ShipLoader`?

## STEPS

- Instantiate PDO inside of your controller
- Pass PDO to ShipLoader via its constructor

**GOAL**
Everything should still work!

**EXTRA CREDIT**

Use a private method in `ShipController` to remove
the duplication of instantiating the PDO object.

#### Step 8 - Concrete Methods
Stuck? No worries: http://bit.ly/summer-oo

## PROBLEM

What duplication do we have between `NormalShip` and `JediShip`?

## STEPS

A) Make `getSingleAttackEffectiveness()` non-abstract in
`AbstractShip`: fill in the real logic here

HINT: You'll probably need to create two new abstract methods

B) Fill in the new abstract methods in `NormalShip` and `JediShip`
and remove the un-needed `getSingleAttackEffectiveness()`.

**GOAL**
Everything should still work!

**EXTRA CREDIT**

Should the new abstract methods be public? protected? private? 

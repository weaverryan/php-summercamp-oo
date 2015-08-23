#### Step 4 - Call setAttribute on PDO
Stuck? No worries: http://bit.ly/summer-oo

## PROBLEM

We lost our error handling setup on the PDO object!

## STEPS

A) Add a "calls" key to call setAttribute on your service

B) Hint: the constants equate to these values:
    PDO::ATTR_ERRMODE       = 2
    PDO::ERRMODE_EXCEPTION  = 3

**GOAL**
Everything should still work!

**EXTRA CREDIT**

Use the expression language to actually use the original constants
instead of the values "2" and "3"

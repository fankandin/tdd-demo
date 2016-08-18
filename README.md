# TDD Demo cases

This project is a collection of cases that demonstrate how TDD works. The examples are written in PHP. 

The cases are located in _[case*]_ folders. The subfolder _[iterations]_ contains all snapshots of the iterations passed to reach the goal using Test Driven Development.

## Case 1. Algorithm: how much could be earned on stock exchange.
 
Say we have a dataset of trivial statistics, how much a stake cost during last N days. We can buy a stake, we can sell it, we want to earn on the difference.

### The goal
Calculate the maximum profit we could make.

### Example:
```php
$ar = [
    1 => 110,
    2 => 90,
    3 => 95,
    4 => 125,
    5 => 120,
    6 => 100
];
```
The best strategy would be to buy on the 2nd day for 90 and to sell on the 5th day for 120.
The answer: 35. 

### How to use:
* stockplay-assert.php - trivial function used for assertions
* stockplay-canvas.php - starting canvas to develop iteratively in
* result/stockplay.php - the optimized algorithm (probably one of possible solutions), a snapshot of the very last iteration


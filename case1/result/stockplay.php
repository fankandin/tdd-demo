<?php
include __DIR__ . '/../stockplay-assert.php';

function calc(array $ar)
{
    $profit = 0;
    foreach ($ar as $i=>$minVal) {
        foreach ($ar as $j=>$maxVal) {
            if (($j > $i) && ($maxVal - $minVal > $profit)) {
                $profit = $maxVal - $minVal;
            }
        }
    }

    return $profit;
}

// 1. Empty array
assertCalc(0, []);

// 2. The only element in the array, zero
assertCalc(0, [0]);

// 3. Several elements in the array, zeros
assertCalc(0, [1=>0, 0, 0]);

// 4. The only element in the array, non-zero
assertCalc(0, [100]);

// 5. Two non-zero elements. Counting on 1-element array doesn't work anymore
assertCalc(10, [90, 100]);

// 6. Earn the same, but do not buy on the wrong price 100
assertCalc(30, [90, 120, 100]);

// 7. Nothing to earn
assertCalc(0, [120, 100, 90]);

// 8. Nothing to earn, there are two minimums
assertCalc(0, [120, 100, 90, 90]);

// 9. Real case
assertCalc(10, [120, 100, 90, 90, 100]);
assertCalc(10, [1=>120, 100, 90, 90, 100]);
assertCalc(10, [120, 100, 90, 90, 100, 80]);
assertCalc(35, [
	1 => 110,
	2 => 90,
	3 => 95,
	4 => 125,
	5 => 120,
	6 => 100,
]);
